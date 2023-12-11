<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
           $banners =  Banner::get();
         $data  = $banners->map( function($banner){
            return [
                'image' => '<img alt="image" src="' . asset("uploads/{$banner->image}") . '" width="35">',
                'title' =>  " $banner->title ",
                'status' => '<button data-banner="' . $banner->id . '" class="btn ' . ($banner->status == 1 ? 'btn-success Status' : 'btn-danger Status') . '">' . ($banner->status == 1 ? 'Active' : 'UnActive') . '</button>',
                'option' => '<button data-banner="' . $banner->id . '"  class="btn btn-primary edit"> Edit </button> <button data-banner="' . $banner->id . '" class="btn btn-danger delete " > Delete </button>'
            ];
            
           });
           return response()->json(['status' => 200 , 'data' => $data ]);
        }else{
            return view('back.banner.index');
        }
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::findorfail($id);
        $banner->status =  $banner->status == 1 ? 0 : 1 ;
        $banner->update();
        $msg = 'Banner Status Update Successfully !';
        return response()->json(['status' => 200 , 'message' => $msg ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
      return response()->json(['status' => 200 , 'message' => 'Banner Delete Successfull ']);

    }
}
