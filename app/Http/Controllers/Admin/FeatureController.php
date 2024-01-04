<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index(Request $request)
    {
           $feature =  Feature::latest()->get();
            return view('back.features.index', compact('feature'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.features.create');
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable',
         
            'status' => 'nullable',
            'order' => 'nullable|numeric',
        ]);
    
        $trainer = new Feature();
        // Handle file upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Check if the file is valid
            if ($request->file('image')->isValid()) {
                $uniqueFileName = md5(time() . $request->file('image')->getClientOriginalName());
                $imagePath = $request->file('image')->move('uploads', $uniqueFileName);
                $trainer->image = $imagePath;
            }
        }
    
        // Create a new Banner instance or find an existing one
    
    
        // Set properties of the banner
        $trainer->name = $request->input('name');
       
        $trainer->description = $request->description;
        $trainer->status = $request->status ?? 1;
        $trainer->order = $request->input('order');
    
        // Save the Banner
        $trainer->save();
    
        return redirect()->back()->with('success', 'Feature has been saved successfully!');
    }
    
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
                public function show($id)
            {
                $Banner = Feature::findOrFail($id);
                $Banner->status = $Banner->status == 1 ? 0 : 1;
                $Banner->update();

                // Redirect to a specific route or URL
                return redirect()->back()->with('success', 'Feature Status Updated Successfully!');
            }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $feature = Feature::findorfail($id);
       return view('back.features.edit', compact('feature'));

     
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
        $trainer = Feature::findOrFail($id);
    
        // Handle file upload
       
        if ($request->hasFile('image')) {
            // Check if the file is valid
            if ($request->file('image')->isValid()) {
                $uniqueFileName = md5(time() . $request->file('image')->getClientOriginalName());
                $imagePath = $request->file('image')->move('uploads', $uniqueFileName);
                $trainer->image = $imagePath;
            }
        }
    
        // Create a new Banner instance or find an existing one
    
    
        // Set properties of the banner
        $trainer->name = $request->input('name');
       
        $trainer->description = $request->description;
        $trainer->status = $request->input('status') ?? 1;
        $trainer->order = $request->input('order');
    
        // Save the Banner
        $trainer->save();
        // Redirect to a specific route or URL after the update
        return redirect()->back()->with('success', 'Feature Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = Feature::findOrFail($id);
    

      

        if ($feature->delete()) {
            return redirect()->back()->with('success', 'feature Delete Successful!');
        } else {
            return redirect()->back()->with('error', 'Failed to delete the feature.');
        }
    }
}
