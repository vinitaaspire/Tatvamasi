<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Partners;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    Public function index(){
        $about = About::first();
        $partners = Partners::active()->get();

        return view('front.about' , compact('about' , 'partners'));
    }
}
