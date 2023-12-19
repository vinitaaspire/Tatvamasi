<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    Public function index(){
        if(Auth::check()){

            return view('front.dashboard.index');
        }
        return view('front.login');
    }

    Public function courseDetails($id){
        return view('front.dashboard.courseDetails');
    }

    Public function message(){
        return view('front.dashboard.message');
    }


    Public function payment(){
        return view('front.dashboard.paymentHistory');
    }

    public function profile(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('front.dashboard.profile');
        } else {
     
            $user = User::findorfail(Auth::User()->id);
            $user->name = $request->input('name');
            $user->mobile = $request->input('mobile');
            $user->email = $request->input('email');
            $user->city = $request->input('city');
            $user->dob = $request->input('dob');
            $user->comments = $request->input('comments');
    
            // Handle photo upload
            if ($request->hasFile('photo')) {
                // Check if the file is valid
                if ($request->file('photo')->isValid()) {
                    $uniqueFileName = md5(time() . $request->file('photo')->getClientOriginalName());
            
                    // Move the uploaded file to the 'uploads' directory
                    $imagePath = $request->file('photo')->move('uploads', $uniqueFileName);
            
                    // Store the relative path to the user model
                    $user->photo = 'uploads/' . $uniqueFileName;
                }
            }
            
    
            // Save changes to the user model
            $user->save();
    
            // Redirect back with success message
            return redirect()->route('profile')->with('success', 'Profile updated successfully');
        }
    }
    



}
