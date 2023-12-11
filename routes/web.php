<?php

use App\Http\Controllers\Front\HomeController;
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

Route::get('about', function () {
    return view('front.about');
})->name('about');

Route::get('blog', function () {
    return view('front.blog');
})->name('blog');

Route::get('blog-list', function () {
    return view('front.blog-list');
})->name('blog-list');

Route::get('contact', function () {
    return view('front.contact');
})->name('contact');

Route::get('course', function () {
    return view('front.course');
})->name('course');

Route::get('dashboard', function () {
    return view('front.dashboard');
})->name('dashboard');

Route::get('fit-strength-flexible', function () {
    return view('front.fit-strength-flexible');
})->name('fit-strength-flexible');

Route::get('get-started', function () {
    return view('front.get-started');
})->name('get-started');

Route::get('login-head', function () {
    return view('front.login-head');
})->name('login-head');

Route::get('OTP', function () {
    return view('front.OTP');
})->name('OTP');

Route::get('pcod-hormon', function () {
    return view('front.pcod-hormon');
})->name('pcod-hormon');

Route::get('policy', function () {
    return view('front.policy');
})->name('policy');

Route::get('prenatal-yoga', function () {
    return view('front.prenatal-yoga');
})->name('prenatal-yoga');

Route::get('price', function () {
    return view('front.price');
})->name('price');

Route::get('pcod-hormon', function () {
    return view('front.pcod-hormon');
})->name('pcod-hormon');

Route::get('signup', function () {
    return view('front.signup');
})->name('signup');

Route::get('stress-sleep', function () {
    return view('front.stress-sleep');
})->name('stress-sleep');

Route::get('testimonial', function () {
    return view('front.testimonial');
})->name('testimonial');

Route::get('thyroid-back-diabete', function () {
    return view('front.thyroid-back-diabete');
})->name('thyroid-back-diabete');

Route::get('weight-fat-ton', function () {
    return view('front.weight-fat-ton');
})->name('weight-fat-ton');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
