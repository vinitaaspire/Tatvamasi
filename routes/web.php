<?php


use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\CoursesController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\TestimonialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'home'])->name('/');
Route::get('getbatch/{id}',[HomeController::class, 'getbatch'])->name('getbatch');

Route::get('about',[AboutController::class,'index'])->name('about');
Route::get('course',[CoursesController::class,'index'])->name('course');
Route::get('testimonial',[TestimonialController::class,'index'])->name('testimonial');
Route::get('blogs',[BlogController::class,'index'])->name('blogs');
Route::get('blog/{id}',[BlogController::class,'blog_details'])->name('blog');
Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::get('login',[AuthController::class,'login'])->name('login');
Route::get('policy',[HomeController::class,'policy'])->name('policy');
Route::get('signup',[AuthController::class,'signup'])->name('signup');
Route::get('forgetPassword',[AuthController::class,'forgetPassword'])->name('forgetPassword');
Route::get('otp',[AuthController::class,'otp'])->name('otp');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
