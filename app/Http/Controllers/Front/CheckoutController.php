<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Order;
use App\Models\Testimonial;
use App\Models\trialClassEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    Public function index(Request $request , $slug = ''){
        if(Auth::check()){
            if(isset($slug) && $slug!=''){
                 $course = Courses::where('name', $slug)->first();
            }
            $course = Courses::active()->first();
            $courses = Courses::active()->get();
            $testimonial = Testimonial::active()->get();
   
    
           return view('front.cheackout',compact('course', 'testimonial' , 'courses'));
        }
     return redirect()->route('login');

    }


public function store(Request $request)
{

 
    $validatedData = $request->validate([
        'name' => 'required|string',
        'number' => 'required|numeric|digits:10',
        'email' => 'required|email',
        'city' => 'required|string',
        'courses' => 'required|exists:courses,id',
        'package' => 'required|string',
        'batch' => 'required|string',
        'subscriptionType' => 'required|string',
        'gclid_field' => 'nullable|string',
        'hsa_cam_field' => 'nullable|string',
        'otp' => 'nullable|string', 
    ]);

    $order = new Order;
    $order->user_id = Auth::User()->id ?? 0;
    $order->courses_id =  $request->courses;
    $order->price = $request->package;
    $order->duration = $request->package;

        list($month, $amount) = explode('-', $request->package);
        $order->duration = $month;
        $order->price = $amount; 

    $order->name = $request->name;
    $order->number = $request->mobile;
    $order->emai = $request->email;
    $order->city = $request->city;
    $order->session_type = $request->subscriptionType;
    if($order->save()){
        return response()->json(['message' => 'Form submitted successfully' , 'data' => ['course_fee' => $amount , 'order' => $order->id ] ],200);
    }else{
        return response()->json(['message' => 'Somting went wrong'],400);
    }




}

Public function payment(Request $request){
   
    $order = Order::findorfail($request->order_id);
    $order->payment_status = 1;
    $order->Save();

    return response()->json(['message', 'payment reseve successfully'],200);
}

Public function trail(Request $request){
    $trail =  new trialClassEnquiry;
    $trail->name = $request->name;
    $trail->email = $request->email;
    $trail->course = $request->courses;
      $trail->batch = $request->batch ?? '';
      $trail->save();
      
   return redirect()->back()->with('success', 'Trail Enquiry sent successfully');

}

}


