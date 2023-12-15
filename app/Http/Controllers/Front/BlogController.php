<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::active()->get();
        return view('front.blogs', compact('blogs'));
    }

    public function blog_details($id)
    {
        $blog = Blog::where('slug', $id)->first();
        $blogs =  Blog::latest()->take(5)->get();
        return view('front.blog', compact('blog', 'blogs'));
    }
}
