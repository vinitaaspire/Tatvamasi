<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CoursesCategoryController extends Controller
{
    public function index(Request $request)
    {
           $category =  CourseCategory::latest()->get();
            return view('back.category.index', compact('category'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.category.create');
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
            
            'status' => 'nullable',
            'order' => 'nullable|numeric',
        ]);
    
      
        $Testimonial = new CourseCategory();
    
        // Set properties of the banner
        $Testimonial->name = $request->input('name');
        $Testimonial->status = $request->input('status') ?? 1;
        $Testimonial->order = $request->input('order');
    
        // Save the Banner
        $Testimonial->save();
    
        return redirect()->back()->with('success', 'Category has been saved successfully!');
    }
    
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
                public function show($id)
            {
                $Banner = CourseCategory::findOrFail($id);
                $Banner->status = $Banner->status == 1 ? 0 : 1;
                $Banner->update();

                // Redirect to a specific route or URL
                return redirect()->back()->with('success', 'Category Status Updated Successfully!');
            }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $category = CourseCategory::findorfail($id);
       return view('back.category.edit', compact('category'));

     
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
        $Testimonial = CourseCategory::findOrFail($id);
        $Testimonial->name = $request->input('name');
        $Testimonial->status = $request->input('status') ?? 1;
        $Testimonial->order = $request->input('order');
    
        // Save the Banner
        $Testimonial->save();
    
        // Redirect to a specific route or URL after the update
        return redirect()->back()->with('success', 'Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $banner = CourseCategory::findorfail($id);
      $banner->delete();
      return redirect()->back()->with('success', 'Category Delete Successfull!');
     
    }
}
