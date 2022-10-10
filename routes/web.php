<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DonationController;

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

Route::get('/donation', function () {
    return view('donation-test');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register');
Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('about-us/vision', [HomeController::class, 'aboutUs'])->name('about-us-vision');
Route::get('about-us/board-of-directors', [HomeController::class, 'boardOfDirectors'])->name('board-of-directors');
Route::get('school/history', [HomeController::class, 'schoolHistory'])->name('school-history');
Route::get('school', [HomeController::class, 'school'])->name('school');
Route::get('school/teacher', [HomeController::class, 'schoolTeacher'])->name('school-teacher');
Route::get('sponsor-a-student', [HomeController::class, 'sponsorAStudent'])->name('sponsor-a-student');
Route::get('sponsor-a-class', [HomeController::class, 'sponsorAClass'])->name('sponsor-a-class');
Route::get('gift-student-sponsorship', [HomeController::class, 'giftStudentSponsorship'])->name('gift-student-sponsorship');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('product', [DonationController::class, 'index']);
Route::get('paysuccess', [DonationController::class, 'razorPaySuccess']);
Route::get('razor-thank-you', [DonationController::class, 'RazorThankYou']);

Route::post('razorpay-payment', [DonationController::class, 'store'])->name('razorpay.payment.store');