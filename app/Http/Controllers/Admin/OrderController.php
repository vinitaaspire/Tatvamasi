<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Request $request)
    {
           $orders =  Order::latest()->get();
  
            return view('back.order.index', compact('orders'));
     
    }
}
