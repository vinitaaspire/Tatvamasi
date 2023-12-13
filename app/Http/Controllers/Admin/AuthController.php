<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('back.auth.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            return redirect()->route('admin');
        }

        return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.']);
    }

    public function dashboard()
    {
        // If user is not authenticated, redirect to login
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin');
        }
        $booking = Order::where('payment_status', 1)->count();
        $users = User::count();
        $courses = Courses::count();
        $revenue = Order::where('payment_status', 1)->sum('price');

        $currentDate = Carbon::now();
        $lastSixMonths = Carbon::now()->subMonths(6);

        $revenueData = Order::where('payment_status', 1)
        ->whereBetween('created_at', [$lastSixMonths, $currentDate])
        ->get()
        ->groupBy(function ($date) {
            return Carbon::parse($date->created_at)->format('F Y');
        })
        ->map(function ($orders) {
            return $orders->sum('price');
        })
        ->toArray();  // Convert the result to an array
    
        $weekEarning = Order::where('payment_status', 1)
        ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
        ->sum('price');
    
    $monthEarning = Order::where('payment_status', 1)
        ->whereMonth('created_at', now()->month)
        ->sum('price');
    
    $yearEarning = Order::where('payment_status', 1)
        ->whereYear('created_at', now()->year)
        ->sum('price');
    
    

        return view('dashboard', compact('booking', 'users', 'courses', 'revenue' , 'revenueData' , 'weekEarning' , 'monthEarning' , 'yearEarning'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin');
    }

    Public function profile(){
        return view('back.profile.index');
    }


    public function updateProfile(Request $request)
    {
        $request->validate([
            // 'name' => 'required|string|max:255',
            // 'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $admin = Auth::guard('admin')->user();

        // Update basic information
        // $admin->name = $request->input('name');
        // $admin->email = $request->input('email');

        // Update password if provided
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->input('password'));
        }

        // Update profile picture if provided
        if ($request->hasFile('profile_picture')) {
            // Delete old profile picture if exists
            Storage::delete($admin->profile_picture);

            // Store new profile picture
            $admin->profile_picture = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $admin->save();

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully!');
    }
}
