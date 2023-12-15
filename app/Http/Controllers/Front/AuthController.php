<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    Public function login(){
        return view('front.login');
    }

    Public function signup(){
        return view('front.signup');
    }

    Public function otp(){
        return view('front.otp');
    }

    Public function forgetPassword(){
        return view('front.forgetPassword');
    }

  

}
