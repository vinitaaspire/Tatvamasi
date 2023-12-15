<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TrailClass;

class TrialController extends Controller
{
    public function index(){
        $trial = TrailClass::first();
        return view('back.trial.index' , compact('trial'));
    }
    public function store(Request $request)
    {
        // Attempt to retrieve an existing About record
        $trial = TrailClass::first();
    
        // If no existing record is found, create a new one
        if (!$trial) {
            $trial = new TrailClass();
        }
    
        
        $trial->title = $request->input('title');
        $trial->description = $request->input('description');
        $trial->price = $request->input('price');
        $trial->save();
    
        return redirect()->back()->with('success', 'Trial Class  data stored successfully.');
    }
    
}
