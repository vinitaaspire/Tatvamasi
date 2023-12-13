<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index(Request $request)
    {
           $testimonial =  Testimonial::latest()->get();
            return view('back.testimonial.index', compact('testimonial'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validator = $request->validate([
            'name' => 'required',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'designation' => 'nullable',
            'desc'    => 'nullable',
            'status' => 'nullable',
            'order' => 'nullable|numeric',
        ]);
    
        // Handle file upload
        $imagePath = null;
        if ($request->hasFile('profile_pic')) {
            // Check if the file is valid
            if ($request->file('profile_pic')->isValid()) {
                $uniqueFileName = md5(time() . $request->file('profile_pic')->getClientOriginalName());
                $imagePath = $request->file('profile_pic')->move('uploads', $uniqueFileName);
            }
        }
    
        // Create a new Banner instance or find an existing one
        $Testimonial = new Testimonial();
    
        // Set properties of the banner
        $Testimonial->name = $request->input('name');
        $Testimonial->profile_pic = $imagePath ?? $Testimonial->image;
        $Testimonial->designation = $request->input('designation');
        $Testimonial->desc = $request->input('desc') ?? '';
        $Testimonial->status = $request->input('status') ?? 1;
        $Testimonial->order = $request->input('order');
    
        // Save the Banner
        $Testimonial->save();
    
        return redirect()->back()->with('success', 'Testimonial has been saved successfully!');
    }
    
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
                public function show($id)
            {
                $Banner = Testimonial::findOrFail($id);
                $Banner->status = $Banner->status == 1 ? 0 : 1;
                $Banner->update();

                // Redirect to a specific route or URL
                return redirect()->back()->with('success', 'Testimonial Status Updated Successfully!');
            }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $testimonial = Testimonial::findorfail($id);
       return view('back.testimonial.edit', compact('testimonial'));

     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
     
    
        // Find the Banner entry by ID
        $Testimonial = Testimonial::findOrFail($id);
    
        $imagePath = null;
        if ($request->hasFile('profile_pic')) {
            // Check if the file is valid
            if ($request->file('profile_pic')->isValid()) {
                $uniqueFileName = md5(time() . $request->file('profile_pic')->getClientOriginalName());
                $imagePath = $request->file('profile_pic')->move('uploads', $uniqueFileName);
                $Testimonial->profile_pic = $imagePath ;
            }
        }
    
   
    
        // Set properties of the banner
        $Testimonial->name = $request->input('name');
      
        $Testimonial->designation = $request->input('designation');
        $Testimonial->desc = $request->input('desc') ?? '';
        $Testimonial->status = $request->input('status') ?? 1;
        $Testimonial->order = $request->input('order');
    
        // Save the Banner
        $Testimonial->save();
    
        // Redirect to a specific route or URL after the update
        return redirect()->back()->with('success', 'Testimonial Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $banner = Testimonial::findorfail($id);
      $banner->delete();
      return redirect()->back()->with('success', 'Banner Delete Successfull!');
     
    }
}
