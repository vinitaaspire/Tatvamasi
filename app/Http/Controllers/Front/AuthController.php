<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
       
        if ($request->isMethod('get')) {
            return view('front.login');
        } else {
            $request->validate([
                'email' => 'required|string',
                'password' => 'required|string',
            ]);
    
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                // Authentication passed
                return redirect()->route('dashboard'); // Adjust the route based on your application
            }
    
            // Authentication failed
            return back()->with('error','email or password does not match');
        }
    }
    

    Public function signup(){
        return view('front.signup');
    }

    public function processSignup(Request $request)
    {
      //  Validate the form data
        $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|string|max:10',
            'email' => 'required|email|unique:users,email',
            'city' => 'nullable|string',
            'dob' => 'required|date',
            'photo' => 'required|image|mimes:jpeg,png,gif',
            'comments' => 'required|string',
        ]);
    
        // Handle file upload
  
        if ($request->hasFile('photo')) {
            // Check if the file is valid
            if ($request->file('photo')->isValid()) {
                $uniqueFileName = md5(time() . $request->file('photo')->getClientOriginalName());
                $imagePath = $request->file('photo')->move('uploads', $uniqueFileName);
            }else{
                $imagePath = [];
            }
        }else{
            $imagePath = [];
        }

    
        // Create a new user
        $user = new User([
            'name' => $request->input('name'),
            'mobile' => $request->input('mobile') ?? 9998888888,
            'email' => $request->input('email'),
            'city' => $request->input('city'),
            'dob' => $request->input('dob'),
            'photo' => $imagePath,
            'comments' => $request->input('comments'),
        ]);
    
        $user->save();
    
        // Log in the user
        Auth::login($user);
    
   
        return redirect()->route('dashboard')->with('success', 'Registration successful and logged in');
    }

    Public function otp(){
        return view('front.otp');
    }

    Public function forgetPassword(){
        return view('front.forgetPassword');
    }


    public function logout()
    {
        Auth::logout();

        // Redirect to the home page or any other route after logout
        return redirect('/');
    }

  

}
