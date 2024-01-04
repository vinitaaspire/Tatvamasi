<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Batch;
class BatchController extends Controller
{
    Public function index(){
            $batchs =  Batch::latest()->get();
            return view('back.batch.index', compact('batchs'));
    }
    
       public function create()
    {
        return view('back.batch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    
        $batch =  new Batch;
    
        // Set properties of the banner
        $batch->start = $request->start;
        $batch->end = $request->end;
        $batch->status = $request->input('status') ?? 1;
        $batch->order = $request->input('order');
    
        // Save the Banner
        $batch->save();
    
        return redirect()->back()->with('success', 'Batch has been saved successfully!');
    }
    
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
                public function show($id)
            {
                $batch = Batch::findOrFail($id);
                $batch->status = $batch->status == 1 ? 0 : 1;
                $batch->update();

                // Redirect to a specific route or URL
                return redirect()->back()->with('success', 'Batch Status Updated Successfully!');
            }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $batch = Batch::findorfail($id);
       return view('back.batch.edit', compact('batch'));

     
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
     
    
        $batch =  Batch::findorfail($id);
    
        // Set properties of the banner
        $batch->start = $request->start;
        $batch->end = $request->end;
        $batch->status = $request->input('status') ?? 1;
        $batch->order = $request->input('order');
    
        // Save the Banner
        $batch->save();
    
        return redirect()->back()->with('success', 'Batch has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $banner = Batch::findorfail($id);
      $banner->delete();
      return redirect()->back()->with('success', 'Batch Delete Successfull!');
     
    }
    
}
