<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Courses;
use App\Models\Price;
use App\Models\WhyUs;
use App\Models\Testimonial;
use App\Models\Trainer;

class HomeController extends Controller
{
    public function home()
    {

        $banners = Banner::active()->get();
        $courses = Courses::active()->take(6)->get();
        $whyUs   = WhyUs::active()->take(5)->get();
        $testimonial = Testimonial::active()->get();
        $about = About::first();
        $trainers = Trainer::active()->get();
        $courses = Courses::active()->take(6)->get();
        $pricing = Price::active()->take(3)->get();
        $blogs  = Blog::active()->take(3)->get();

        return view('front.welcome', compact(
            'banners',
            'courses',
            'whyUs',
            'testimonial',
            'about',
            'trainers',
            'courses',
            'pricing',
            'blogs'
        ));
    }
}
