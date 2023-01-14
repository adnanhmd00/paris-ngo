<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ImpactController;
use App\Http\Controllers\GetInvolvedController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index']);
Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register');
Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('about-us/vision', [AboutUsController::class, 'vision'])->name('about-us-vision');
Route::get('about-us/our-story', [AboutUsController::class, 'ourStory'])->name('about-us-story');
Route::get('about-us/our-team', [AboutUsController::class, 'ourTeam'])->name('about-us-team');
Route::get('about-us/testimonials', [AboutUsController::class, 'testimonials'])->name('about-us-testimonials');
Route::get('school/history', [SchoolController::class, 'history'])->name('school-history');

Route::get('our-work/monsoon-kids-school', [WorkController::class, 'theSchool'])->name('our-work-school');
Route::get('our-work/alumni-program', [WorkController::class, 'alumniProgram'])->name('our-work-alumni');
Route::get('our-work/mahila-mandal', [WorkController::class, 'communityOutreach'])->name('our-work-community');
Route::get('our-work/sewing-classes', [WorkController::class, 'sewingClasses'])->name('our-work-sewing');

Route::get('our-impact/students', [ImpactController::class, 'students'])->name('our-impact-students');
Route::get('our-work/alumni', [ImpactController::class, 'alumni'])->name('our-impact-alumni');
Route::get('our-impact/community', [ImpactController::class, 'community'])->name('our-impact-community');

Route::get('gallery', [AboutUsController::class, 'gallery'])->name('gallery');



// Route::get('about-us/vision', [HomeController::class, 'aboutUs'])->name('about-us-vision');
// Route::get('about-us/board-of-directors', [HomeController::class, 'boardOfDirectors'])->name('board-of-directors');
Route::get('school/history', [HomeController::class, 'schoolHistory'])->name('school-history');
Route::get('school', [HomeController::class, 'school'])->name('school');
Route::get('school/teacher', [HomeController::class, 'schoolTeacher'])->name('school-teacher');
Route::get('sponsor-a-student', [HomeController::class, 'sponsorAStudent'])->name('sponsor-a-student');
Route::get('sponsor-a-class', [HomeController::class, 'sponsorAClass'])->name('sponsor-a-class');
Route::get('gift-student-sponsorship', [HomeController::class, 'giftStudentSponsorship'])->name('gift-student-sponsorship');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('terms-and-conditions', [HomeController::class, 'termsAndConditions'])->name('terms-and-conditions');
Route::get('privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');


Route::get('volunteer', [GetInvolvedController::class, 'volunteer'])->name('volunteer');
Route::post('volunteer', [GetInvolvedController::class, 'storeVolunteer'])->name('store-volunteer');
Route::get('work-with-us', [GetInvolvedController::class, 'workWithUs'])->name('work-with-us');
Route::post('work-with-us', [GetInvolvedController::class, 'storeWorkWithUs'])->name('store.work-with-us');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('product', [DonationController::class, 'index']);
Route::get('paysuccess', [DonationController::class, 'razorPaySuccess']);
Route::get('razor-thank-you', [DonationController::class, 'RazorThankYou']);

Route::post('razorpay-payment', [DonationController::class, 'store'])->name('razorpay.payment.store');