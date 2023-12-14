<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyUs;

class WhyChooseUsController extends Controller
{
    public function index(Request $request)
    {
           $whyus =  WhyUs::latest()->get();
            return view('back.whyus.index', compact('whyus'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.whyus.create');
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
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           
            'description'    => 'nullable',
            'status' => 'nullable',
            'order' => 'nullable|numeric',
        ]);
    
        // Handle file upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Check if the file is valid
            if ($request->file('image')->isValid()) {
                $uniqueFileName = md5(time() . $request->file('image')->getClientOriginalName());
                $imagePath = $request->file('image')->move('uploads', $uniqueFileName);
            }
        }
    
        // Create a new Banner instance or find an existing one
        $Testimonial = new WhyUs();
    
        // Set properties of the banner
        $Testimonial->title = $request->input('title');
        $Testimonial->image = $imagePath ?? '';
       
        $Testimonial->description = $request->input('description') ?? '';
        $Testimonial->status = $request->input('status') ?? 1;
        $Testimonial->order = $request->input('order');
    
        // Save the Banner
        $Testimonial->save();
    
        return redirect()->back()->with('success', 'Why Us  has been saved successfully!');
    }
    
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
                public function show($id)
            {
                $Banner = WhyUs::findOrFail($id);
                $Banner->status = $Banner->status == 1 ? 0 : 1;
                $Banner->update();

                // Redirect to a specific route or URL
                return redirect()->back()->with('success', 'Why Us Status Updated Successfully!');
            }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $whyus = WhyUs::findorfail($id);
       return view('back.whyus.edit', compact('whyus'));

     
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
        $Testimonial = WhyUs::findOrFail($id);
    
       
        if ($request->hasFile('image')) {
            // Check if the file is valid
            if ($request->file('image')->isValid()) {
                $uniqueFileName = md5(time() . $request->file('image')->getClientOriginalName());
                $imagePath = $request->file('image')->move('uploads', $uniqueFileName);
                $Testimonial->profile_pic = $imagePath ;
            }
        }
    
   
    
        // Set properties of the banner
        $Testimonial->title = $request->input('title');
      

        $Testimonial->description = $request->input('description') ?? '';
        $Testimonial->status = $request->input('status') ?? 1;
        $Testimonial->order = $request->input('order');
    
        // Save the Banner
        $Testimonial->save();
    
        // Redirect to a specific route or URL after the update
        return redirect()->back()->with('success', 'Why Us Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $WhyUs = WhyUs::findorfail($id);
      $WhyUs->delete();
      return redirect()->back()->with('success', 'Why Us Delete Successfull!');
     
    }
}
