<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $about = About::first();
        return view('back.about.index' , compact('about'));
    }
    public function store(Request $request)
    {
        // Attempt to retrieve an existing About record
        $about = About::first();
    
        // If no existing record is found, create a new one
        if (!$about) {
            $about = new About();
        }
    
        if ($request->hasFile('image')) {
            $uniqueFileName =$request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->move('uploads', $uniqueFileName);
            $about->image = $imagePath;
        }

    
        // // Handle the multiple image uploads
        // $imagePaths = [];
    
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {
        //         $imagePaths[] = $image->move('uploads', 'public');
        //     }
    
        //     $about->images = json_encode($imagePaths);
        // } else {
        //     $about->images = null; // If no images are uploaded, set it to null or an empty value based on your model definition
        // }
    
        // Create a new About model instance
        $about->title = $request->input('title');
        $about->description = $request->input('description');
    
        $about->save();
    
        return redirect()->back()->with('success', 'About data stored successfully.');
    }
    
    

    
}
