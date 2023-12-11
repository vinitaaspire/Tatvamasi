<?php

use App\Http\Controllers\Admin\BannerController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
     return view('dashboard');
})->name('admin');

Route::resources([
     'banner' => BannerController::class,
  
 ]);
 
