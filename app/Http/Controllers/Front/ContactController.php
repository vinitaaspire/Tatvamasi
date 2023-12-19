<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact_us;
use Dotenv\Validator;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    Public function index(){
        return view('front.contact');
    }


    public function save(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'phone_number' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        $contact = new Contact_us();
        $contact->name = $request->name;
        $contact->mobile = $request->phone_number;
        $contact->email = $request->email;
        $contact->address = $request->address;

        if ($contact->save()) {
            return redirect()->back()->with('success', 'Contact us form submitted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong, please try again later');
        }
    }
}
