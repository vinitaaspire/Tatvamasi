<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('back.auth.login');
    }

    public function login(Request $request)
    {
   
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
           return view('dashboard');
        }
     
        return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.']);
        
    }

    public function dashboard()
    {
        // If user is not authenticated, redirect to login
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin');
        }

        return view('dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
    
}
