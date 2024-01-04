<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;



class MailSettingController extends Controller
{
    public function index()
    {
       
        return view('back.mail.index');
    }
    
     public function store(Request $request)
    {
      
        $validator = Validator::make($request->all(), [
            'MAIL_FROM_NAME' => 'required',
            'MAIL_MAILER' => 'required',
            'MAIL_HOST' => 'required',
            'MAIL_PORT' => 'required|numeric',
            'MAIL_USERNAME' => 'required',
            'MAIL_PASSWORD' => 'required',
            'MAIL_ENCRYPTION' => 'required',
            'MAIL_FROM_ADDRESS' => 'required|email',
            'MAIL_To_ADDRESS' => 'required|email',
        ]);

     
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update the .env file
        $this->updateEnvFile($request);

        // Clear the configuration cache
        Artisan::call('config:clear');

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Mail configuration updated successfully.');
    }

    /**
     * Update the values in the .env file.
     *
     * @param Request $request
     * @return void
     */
    private function updateEnvFile(Request $request)
    {
        $envFile = base_path('.env');

     
        $envContents = file_get_contents($envFile);

     
        $keys = [
            'MAIL_FROM_NAME',
            'MAIL_MAILER',
            'MAIL_HOST',
            'MAIL_PORT',
            'MAIL_USERNAME',
            'MAIL_PASSWORD',
            'MAIL_ENCRYPTION',
            'MAIL_FROM_ADDRESS',
            'MAIL_To_ADDRESS',
        ];

   
        foreach ($keys as $key) {
            $value = $request->input($key);
            $envContents = preg_replace("/{$key}=(.*)/", "{$key}={$value}", $envContents);
        }

        file_put_contents($envFile, $envContents);
    }
    
    
    
}