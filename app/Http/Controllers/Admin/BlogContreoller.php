<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogContreoller extends Controller
{
    public function index(Request $request)
    {
           $blogs =  Blog::latest()->get();
            return view('back.blog.index', compact('blogs'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
   
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'shortdesc' => 'nullable',
            'status' => 'nullable',
            'order' => 'nullable|numeric',
        ]);

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
        
        if(isset($request->blog_id) && $request->blog_id != null) {
            
            $blog = Blog::findorfail($request->blog_id);
        } else {
    
            $blog = new Blog();
        }
        
        if(isset($request->slug) && $request->slug != null ){
            $blog->slug = Str::slug($request->slug);
        }else{
            $blog->slug = Str::slug($request->input('name'));
        }
        $blog->name = $request->input('name');
        $blog->image = $imagePath ??  $blog->image;
        $blog->shortdesc = $request->input('shortdesc');
        $blog->longdesc = $request->input('longdesc');
        $blog->status = $request->input('status') ?? 1;
        $blog->order = $request->input('order');
        
        $blog->save();
     
        return redirect()->back()->with('success', 'Blog has been saved successfully!');

    }
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
                public function show($id)
            {
                $blog = Blog::findOrFail($id);
                $blog->status = $blog->status == 1 ? 0 : 1;
                $blog->update();

                // Redirect to a specific route or URL
                return redirect()->back()->with('success', 'Blog Status Updated Successfully!');
            }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $blog = Blog::findorfail($id);
       return view('back.blog.edit', compact('blog'));

     
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
     
    
        // Find the blog entry by ID
        $blog = Blog::findOrFail($id);
    
        // Update the blog entry with the new data
        $blog->name = $request->input('name');
        $blog->shortdesc = $request->input('shortdesc');
        $blog->longdesc = $request->input('longdesc');
        $blog->status = $request->input('status');
        $blog->order = $request->input('order');

        if(isset($request->slug) && $request->slug != null ){
            $blog->slug = Str::slug($request->slug);
        }else{
            $blog->slug = Str::slug($request->input('name'));
        }
     
       if ($request->hasFile('image')) {
        if ($request->file('image')->isValid()) {
            $uniqueFileName = md5(time() . $request->file('image')->getClientOriginalName());
            $imagePath = $request->file('image')->move('uploads', $uniqueFileName);
        } else {
           
            $imagePath = null;
        }
    } else {
        
        $imagePath = null;
    }
        $blog->image = $imagePath ??  $blog->image;
        $blog->save();
        return redirect()->back()->with('success', 'Blog Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $banner = Blog::findorfail($id);
      $banner->delete();
      return redirect()->back()->with('success', 'Blog Delete Successfull!');
     
    }
    
    public function info(Request $request){
        return $request->all();
        
    }
}
