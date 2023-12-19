<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Courses;
use App\Models\enquiry;
use App\Models\Price;
use App\Models\subscribe;
use App\Models\WhyUs;
use App\Models\Testimonial;
use App\Models\TrailClass;
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
        $trial   = TrailClass::first();
        $allCourses = Courses::active()->get();


        return view('front.welcome', compact(
            'banners',
            'courses',
            'whyUs',
            'testimonial',
            'about',
            'trainers',
            'courses',
            'pricing',
            'blogs',
            'trial',
            'allCourses'
        ));
    }

    public function getbatch($id)
    {
        $course = Courses::findOrFail($id);
        $batchTimes = json_decode($course->timeing, true);
    
        $options = [];
        foreach ($batchTimes as $batchTime) {
            $start = date('h:i A', strtotime($batchTime['start_time']));
            $end = date('h:i A', strtotime($batchTime['end_time']));
            $days = $batchTime['days'];
    
            $label = "{$days} ({$start} - {$end})";
            $options[] = ['value' => json_encode($batchTime), 'label' => $label];
        }

        $package = [];
        foreach(explode(',',$course->price) as $price){
            $package  =  list($month, $amount) = explode('-', $price);
        }
    
        return response()->json(['batches' => $options , 'package' => $package ]);
    }
    



    Public function policy(){


        return view('front.policy');

    }

    Public function terms(){


        return view('front.tearm');

    }

    public function subscribe(Request $request)
    {
      
        $request->validate([
            'email' => 'required|email', 
        ]);

        // Check if the email already exists
        $existingSubscription = Subscribe::where('email', $request->email)->first();

        if (!$existingSubscription) {
            // Email does not exist, so proceed to store it
            $subscribe = new Subscribe;
            $subscribe->email = $request->email;
            $subscribe->save();

            return response()->json(['success' => 'Subscription successful!']);
        }

        // Email already exists, return a response indicating that
        return response()->json(['success' => 'Email is already subscribed.']);
    }


    public function enquirySave(Request $request){
     
      
        $enquiry = new Enquiry;
    
        // Assign values from the request to the Enquiry model
        $enquiry->name = $request->input('name');
        $enquiry->mobile = $request->input('mobile');
        $enquiry->email = $request->input('email');
        $enquiry->course = $request->input('courses');
        $enquiry->batch = $request->input('batch');
        $enquiry->city = $request->input('city');
    
     
        $enquiry->save();

        return redirect()->back()->with('success', 'Enquiry send successfully');
        
        // return response()->json(['success' => true, 'message' => 'Enquiry saved successfully']);
    }

    
}
