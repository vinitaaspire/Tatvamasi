<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price;

class PriceContreoller extends Controller
{
    public function index(Request $request)
    {
           $price =  Price::latest()->get();
            return view('back.pricing.index', compact('price'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pricing.create');
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
            'month' => 'required',
            'gross_price' => 'nullable', 
            'price' => 'nullable',
            'description' => 'nullable',
            'best_value' => 'nullable|numeric',
        ]);

        $plan = new Price;
        // Set properties of the banner
        $plan->month = $request->input('month');
        $plan->gross_price = $request->input('gross_price');
        $plan->price = $request->input('price');
        $plan->description = $request->description;
        $plan->best_value = $request->input('best_value') ?? 0;
        $plan->status = $request->input('status');
        $plan->order = $request->input('order');
        
        $plan->save();
     
        return redirect()->back()->with('success', 'Pricing has been saved successfully!');

    }
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
                public function show($id)
            {
                $blog = Price::findOrFail($id);
                $blog->status = $blog->status == 1 ? 0 : 1;
                $blog->update();

                // Redirect to a specific route or URL
                return redirect()->back()->with('success', 'Priceing Status Updated Successfully!');
            }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $price = Price::findorfail($id);
       return view('back.pricing.edit', compact('price'));

     
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
       
        $plan = Price::findOrFail($id);
    
        // Set properties of the banner
        $plan->month = $request->input('month');
        $plan->gross_price = $request->input('gross_price');
        $plan->price = $request->input('price');
        $plan->description = $request->description;
        $plan->best_value = $request->input('best_value') ?? 0;
        $plan->status = $request->input('status');
        $plan->order = $request->input('order');
        
        $plan->save();
        return redirect()->back()->with('success', 'Priceing Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $banner = Price::findorfail($id);
      $banner->delete();
      return redirect()->back()->with('success', 'Priceing Delete Successfull!');
     
    }
}
