<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partners;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index(Request $request)
    {
           $partners =  Partners::latest()->get();
            return view('back.partners.index', compact('partners'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.partners.create');
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
            
            'status' => 'nullable',
            'order' => 'nullable|numeric',
        ]);
    
        // Handle file upload
     
        $Partner = new Partners;
        if ($request->hasFile('image')) {
            // Check if the file is valid
            if ($request->file('image')->isValid()) {
                $uniqueFileName = md5(time() . $request->file('image')->getClientOriginalName());
                $imagePath = $request->file('image')->move('uploads', $uniqueFileName);
                $Partner->image = $imagePath ;
            }
        }

        // Set properties of the banner
        $Partner->name = $request->input('name');
        $Partner->status = $request->input('status') ?? 1;
        $Partner->order = $request->input('order');
    
        // Save the Banner
        $Partner->save();
    
        return redirect()->back()->with('success', 'Partner has been saved successfully!');
    }
    
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
                public function show($id)
            {
                $Banner = Partners::findOrFail($id);
                $Banner->status = $Banner->status == 1 ? 0 : 1;
                $Banner->update();

                // Redirect to a specific route or URL
                return redirect()->back()->with('success', 'Partners Status Updated Successfully!');
            }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $partner = Partners::findorfail($id);
       return view('back.partners.edit', compact('partner'));

     
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
        $Banner = Partners::findOrFail($id);
    
        // Update the Banner entry with the new data
        $Banner->name  = $request->input('name');
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
        return redirect()->back()->with('success', 'Partner Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $banner = Partners::findorfail($id);
      $banner->delete();
      return redirect()->back()->with('success', 'Partners Delete Successfull!');
     
    }
}
