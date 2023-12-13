<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainersContreoller extends Controller
{
    public function index(Request $request)
    {
           $trainer =  Trainer::latest()->get();
            return view('back.trainer.index', compact('trainer'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.trainer.create');
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
            'designation' => 'nullable',
         
            'status' => 'nullable',
            'order' => 'nullable|numeric',
        ]);
    
        $trainer = new Trainer();
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
       
        $trainer->designation = $request->input('designation');
        $trainer->status = $request->input('status') ?? 1;
        $trainer->order = $request->input('order');
    
        // Save the Banner
        $trainer->save();
    
        return redirect()->back()->with('success', 'Trainer has been saved successfully!');
    }
    
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
                public function show($id)
            {
                $Banner = Trainer::findOrFail($id);
                $Banner->status = $Banner->status == 1 ? 0 : 1;
                $Banner->update();

                // Redirect to a specific route or URL
                return redirect()->back()->with('success', 'Trainer Status Updated Successfully!');
            }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $trainer = Trainer::findorfail($id);
       return view('back.trainer.edit', compact('trainer'));

     
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
        $trainer = Trainer::findOrFail($id);
    
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
       
        $trainer->designation = $request->input('designation');
        $trainer->status = $request->input('status') ?? 1;
        $trainer->order = $request->input('order');
    
        // Save the Banner
        $trainer->save();
        // Redirect to a specific route or URL after the update
        return redirect()->back()->with('success', 'Trainer Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $banner = Trainer::findorfail($id);
      $banner->delete();
      return redirect()->back()->with('success', 'Trainer Delete Successfull!');
     
    }
}
