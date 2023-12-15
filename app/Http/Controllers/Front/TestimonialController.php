<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    Public function index(){
        $testimonial = Testimonial::active()->get();
        return view('front.testimonial' , compact('testimonial'));
    }
}
