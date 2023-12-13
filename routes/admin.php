<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TrainersContreoller;
use App\Http\Controllers\Admin\BlogContreoller;
use App\Http\Controllers\Admin\PriceContreoller;
use App\Http\Controllers\Admin\ContactUsContreoller;
use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;



     Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
 
     Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');


     Route::resources([
          'banner' => BannerController::class,
          'testimonial' => TestimonialController::class,
          'trainers' => TrainersContreoller::class,
          'blog' => BlogContreoller::class,
          'pricing' => PriceContreoller::class,
          'contactUs' => ContactUsContreoller::class,
     ]);
     Route::get('courses',[CoursesController::class,'index'])->name('courses');
     Route::get('coursesCategory',[CoursesController::class,'index'])->name('coursesCategory');




// });