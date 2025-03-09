<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/index', function () {
    return view('index');
});

Route::post('/register', [RegistrationController::class, 'store'])->name('register');
Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry');
// Route::post('/inquiry', 'InquiryController@store')->name('inquiry');
// Route::post('/', 'InquiryController@store')->name('inquiry');

