<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    Public function index(Request $request , $slug){
         $course = Courses::where('name', $slug)->first();
         $courses = Courses::active()->get();
         $testimonial = Testimonial::active()->get();

 
        return view('front.cheackout',compact('course', 'testimonial' , 'courses'));

    }
}
