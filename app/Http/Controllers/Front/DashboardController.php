<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    Public function index(){
        return view('front.dashboard.index');
    }

    Public function courseDetails($id){
        return view('front.dashboard.courseDetails');
    }

    Public function message($id){
        return view('front.dashboard.message');
    }


    Public function payment($id){
        return view('front.dashboard.paymentHistory');
    }

    Public function profile($id){
        return view('front.dashboard.profile');
    }



}
