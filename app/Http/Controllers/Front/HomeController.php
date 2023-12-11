<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\WhyUs;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function home()
    {
        $banners = Banner::active()->get();
        $whyUs = WhyUs::active()->take(4)->get();
        $testimonials = Testimonial::active()->get();

        return view('front.welcome' , compact('banners' , 'whyUs' , 'testimonials'));
    }
}
