<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    Public function index(){
        $courses = Courses::active()->get();
        return view('front.courses' , compact('courses'));
    }


    Public function details($title){
        $courses = Courses::active()->where('name', $title)->first();
        if($courses){
            return view('front.courseDetails', compact('courses'));
        }else{
            return redirect()->back()->with('error', 'Course Not found !!!');
        }
       

    }
}
