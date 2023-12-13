<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $booking = Order::where('payment_status' , 1 )->count();
        $users = User::where('payment_status' , 1 )->count();
        $courses = Courses::count();
        $revenue = Order::where('payment_status' , 1 )->sum('price');
    
    }
}
