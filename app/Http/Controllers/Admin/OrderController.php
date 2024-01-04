<?php

namespace App\Http\Controllers\Admin;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
public function index(Request $request)
{
    
    $orders = Order::latest();

    // Filter by payment status
    if ($request->has('payment_status')) {
        $orders->where('payment_status', $request->payment_status);
    }

    // Filter by date range
    if ($request->has('start_date') && $request->has('end_date')) {
        $startDate = Carbon::parse($request->start_date)->startOfDay();
        $endDate = Carbon::parse($request->end_date)->endOfDay();

        $orders->whereBetween('created_at', [$startDate, $endDate]);
    }

    $orders = $orders->get();
    if($request->ajax()){
        return view('back.order.orderlist', compact('orders'));
    }
    return view('back.order.index', compact('orders'));
}
   public function show($id)
{
    $order = Order::findOrFail($id);
    return view('back.order.order_details', compact('order'));
}

}
