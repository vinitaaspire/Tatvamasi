<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index(Request $request)
    {
           $Banners =  Banner::latest()->get();
            return view('back.Banner.index', compact('Banners'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.Banner.create');
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
            'link' => 'nullable',
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
        $Banner = $request->filled('Banner_id') ? Banner::findOrFail($request->Banner_id) : new Banner();
    
        // Set properties of the banner
        $Banner->title = $request->input('title');
        $Banner->image = $imagePath ?? $Banner->image;
        $Banner->link = $request->input('link');
        $Banner->status = $request->input('status') ?? 1;
        $Banner->order = $request->input('order');
    
        // Save the Banner
        $Banner->save();
    
        return redirect()->back()->with('success', 'Banner has been saved successfully!');
    }
    
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
                public function show($id)
            {
                $Banner = Banner::findOrFail($id);
                $Banner->status = $Banner->status == 1 ? 0 : 1;
                $Banner->update();

                // Redirect to a specific route or URL
                return redirect()->back()->with('success', 'Banner Status Updated Successfully!');
            }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Banner = Banner::findorfail($id);
       return view('back.Banner.edit', compact('Banner'));

     
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
        $Banner = Banner::findOrFail($id);
    
        // Update the Banner entry with the new data
        $Banner->title = $request->input('title');
        $Banner->link = $request->input('link');
        $Banner->status = $request->input('status');
        $Banner->order = $request->input('order');
    
        // Handle image upload if a new image is provided
       // Handle file upload
       if ($request->hasFile('image')) {
        // Check if the file is valid
        if ($request->file('image')->isValid()) {
            $uniqueFileName = md5(time() . $request->file('image')->getClientOriginalName());
            $imagePath = $request->file('image')->move('uploads', $uniqueFileName);
    
        } else {
           
            $imagePath = null;
        }
    } else {
        
        $imagePath = null;
    }
   

    $Banner->image = $imagePath ??  $Banner->image;

        // Save the changes to the database
        $Banner->save();
    
        // Redirect to a specific route or URL after the update
        return redirect()->back()->with('success', 'Banner Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $banner = Banner::findorfail($id);
      $banner->delete();
      return redirect()->back()->with('success', 'Banner Delete Successfull!');
     
    }
}
