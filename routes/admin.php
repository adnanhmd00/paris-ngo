<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GalleryController;
// use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\CoverImageController;
use App\Http\Controllers\BoxTextController;

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

Route::get('admin', function () {
    return view('admin.index');
});


Route::prefix('admin')->group(function () {
    
    // Route::get('home', [HomeController::class, 'index'])->name('admin.home');

    Route::get('logo-settings', [LogoController::class, 'create'])->name('admin.logo-settings');
    Route::post('add-logo', [LogoController::class, 'store'])->name('admin.add-logo');
    Route::post('update-logo/{id}', [LogoController::class, 'update'])->name('admin.update-logo');
    // ---------------------------------------- SLIDER ----------------------------------------

    Route::get('slider-settings', [SliderController::class, 'index'])->name('admin.slider-settings');
    Route::get('add-slider', [SliderController::class, 'create'])->name('admin.add-slider');
    Route::post('add-slider', [SliderController::class, 'store'])->name('admin.add-slider');
    Route::get('edit-slider/{id}', [SliderController::class, 'edit'])->name('admin.edit-slider');
    Route::post('update-slider/{id}', [SliderController::class, 'update'])->name('admin.update-slider');
    Route::get('cover-images', [CoverImageController::class, 'index'])->name('admin.cover-images');
    Route::get('add-cover-image', [CoverImageController::class, 'create'])->name('admin.add-cover-image');
    Route::post('add-cover-image', [CoverImageController::class, 'store'])->name('admin.add-cover-image');
    Route::get('edit-cover-image/{id}', [CoverImageController::class, 'edit'])->name('admin.edit-cover-image');
    Route::post('update-cover-image/{id}', [CoverImageController::class, 'update'])->name('admin.update-cover-image');

    // ------------------------------------------------------------------------------------------

    // ---------------------------------------- GALLERY ----------------------------------------

    Route::get('gallery', [GalleryController::class, 'index'])->name('admin.gallery');
    Route::get('add-gallery', [GalleryController::class, 'create'])->name('admin.add-gallery');
    Route::post('add-gallery', [GalleryController::class, 'store'])->name('admin.add-gallery');
    Route::get('delete-gallery/{id}', [GalleryController::class, 'destroy'])->name('admin.delete-gallery');
    Route::get('update-gallery-status/{id}', [GalleryController::class, 'update'])->name('admin.gallery-status');

    // ------------------------------------------------------------------------------------------

    // ---------------------------------------- ABOUT ----------------------------------------
    // Route::get('about-us', [AboutUsController::class, 'index'])->name('admin.about-us');
    // Route::post('about-us', [AboutUsController::class, 'update'])->name('admin.about-us');
    // ------------------------------------------------------------------------------------------
    
    // ---------------------------------------- BOX TEXT ----------------------------------------
    Route::get('box-texts', [BoxTextController::class, 'index'])->name('admin.box-texts');
    Route::get('add-text', [BoxTextController::class, 'create'])->name('admin.add-text');
    Route::post('save-text', [BoxTextController::class, 'store'])->name('admin.save-text');
    Route::get('edit-text/{id}', [BoxTextController::class, 'edit'])->name('admin.edit-text');
    Route::post('update-text/{id}', [BoxTextController::class, 'update'])->name('admin.update-text');
    // ------------------------------------------------------------------------------------------


    // ---------------------------------------- ABOUT US ----------------------------------------
    Route::get('about-us/vision', [AboutUsController::class, 'vision'])->name('admin.about-us.vision');
    Route::get('about-us/story', [AboutUsController::class, 'ourStory'])->name('admin.about-us.story');
    Route::get('about-us/team', [AboutUsController::class, 'ourTeam'])->name('admin.about-us.team');
    Route::get('about-us/supporters', [AboutUsController::class, 'supporters'])->name('admin.about-us.supporters');
    Route::get('about-us/gallery', [AboutUsController::class, 'gallery'])->name('admin.about-us.gallery');
    // ------------------------------------------------------------------------------------------
    

    // ---------------------------------------- DONATIONS ----------------------------------------
    Route::get('donations', [DonationController::class, 'index'])->name('admin.donations');
    // ------------------------------------------------------------------------------------------
});