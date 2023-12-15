<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;


class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('back.setting.index', compact('setting'));
    }
    public function store(Request $request)
    {
        // Attempt to retrieve an existing About record
        $setting = Setting::first();

        // If no existing record is found, create a new one
        if (!$setting) {
            $setting = new Setting();
        }

        if ($request->hasFile('logo')) {
            $uniqueFileName = $request->file('logo')->getClientOriginalName();
            $imagePath = $request->file('logo')->move('uploads', $uniqueFileName);
            $setting->logo = $imagePath;
        }

        $setting->footer_about = $request->input('footer_about');
        $setting->mobile = $request->input('mobile');

        $setting->email = $request->input('email');
        $setting->coppyright = $request->input('coppyright');
        $setting->facebook = $request->input('facebook');
        $setting->twitter = $request->input('twitter');
        $setting->google = $request->input('google');
        $setting->instagram = $request->input('instagram');
        $setting->pinterest = $request->input('pinterest');
        $setting->whatsapp = $request->input('whatsapp');
        $setting->save();

        return redirect()->back()->with('success', 'Setting data stored successfully.');
    }
}
