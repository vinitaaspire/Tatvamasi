<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
     public function index(Request $request)
    {
           $coupon =  Coupon::latest()->get();
            return view('back.coupon.index', compact('coupon'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
         public function store(Request $request)
    {
      
      
        $coupon = new Coupon();

        // Assign form input values to the Coupon model
        $coupon->coupon = $request->input('coupon');
        $coupon->min_value = $request->input('min_value');
        $coupon->discount_price = $request->input('discount_price');
        $coupon->percent_price = $request->input('percent_price');
        $coupon->start_date = $request->input('start_date');
        $coupon->end_date = $request->input('end_date');
        $coupon->status = $request->input('status');

        // Save the coupon
        $coupon->save();

        // Redirect back with a success message
        return redirect()->route('coupon.index')->with('success', 'Coupon stored successfully.');
    }
   
    
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
                public function show($id)
            {
                $coupon = Coupon::findOrFail($id);
                $coupon->status = $coupon->status == 1 ? 0 : 1;
                $coupon->update();

                // Redirect to a specific route or URL
                return redirect()->back()->with('success', 'Coupon Status Updated Successfully!');
            }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $coupon = Coupon::findorfail($id);
       return view('back.coupon.edit', compact('coupon'));

     
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
       
   $coupon = Coupon::findOrFail($id);

        // Assign form input values to the Coupon model
        $coupon->coupon = $request->input('coupon');
        $coupon->min_value = $request->input('min_value');
        $coupon->discount_price = $request->input('discount_price');
        $coupon->percent_price = $request->input('percent_price');
        $coupon->start_date = $request->input('start_date');
        $coupon->end_date = $request->input('end_date');
        $coupon->status = $request->input('status');

        // Save the coupon
        $coupon->save();

        // Redirect back with a success message
        return redirect()->route('coupon.index')->with('success', 'Coupon stored successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);
    

      

        if ($coupon->delete()) {
            return redirect()->back()->with('success', 'Coupon Delete Successful!');
        } else {
            return redirect()->back()->with('error', 'Failed to delete the Coupon.');
        }
    }
}
