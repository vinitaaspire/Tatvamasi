<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $about = About::where('module','about')->first();
        return view('back.about.index' , compact('about'));
    }
    
    public function store(Request $request)
    {
     
          $about = About::where('module', $request->module)->first();
        
        if (!$about) {
            // If the record doesn't exist, create a new one
            $about = new About;
            $about->module = $request->module;
            $about->save();
        }
    
    
        if ($request->hasFile('image')) {
            $uniqueFileName =$request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->move('uploads', $uniqueFileName);
            $about->image = $imagePath;
        }
       
       
        if ($request->hasFile('images')) {
        $uploadedImages = [];

        foreach ($request->file('images') as $image) {
            $uniqueFileName = $image->getClientOriginalName();
            $imagePath = $image->move('uploads', $uniqueFileName);
            $uploadedImages[] = $imagePath;
        }

        // Save the array of image paths to the 'images' attribute
        $about->images = $uploadedImages;
    }
    
        $about->name = $request->name;
        $about->title = $request->input('title');
        $about->description = $request->description;
        $about->shortdesc = $request->shortdesc;
        $about->status = $request->status;

    if($about->save()){
         return redirect()->back()->with('success', $request->module . ' info data stored successfully.');
    }else{
         return redirect()->back()->with('success', $request->module . ' Somting went wrong.');
    }
   

    }
    
    

    
}
