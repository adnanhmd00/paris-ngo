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
use App\Http\Controllers\Admin\OurWorkController;
use App\Http\Controllers\Admin\OurImpactController;

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
    Route::post('about-us/add-vision', [AboutUsController::class, 'postVision'])->name('admin.about-us.add-vision');
    Route::post('about-us/update-vision', [AboutUsController::class, 'updateVision'])->name('admin.about-us.update-vision');
    Route::get('about-us/story', [AboutUsController::class, 'ourStory'])->name('admin.about-us.story');
    Route::post('about-us/add-story', [AboutUsController::class, 'postStory'])->name('admin.about-us.add-story');
    Route::post('about-us/update-story', [AboutUsController::class, 'updateStory'])->name('admin.about-us.update-story');
    Route::get('about-us/team', [AboutUsController::class, 'ourTeam'])->name('admin.about-us.team');
    
    Route::post('about-us/add-team-director', [AboutUsController::class, 'addTeamDirector'])->name('admin.add-team-director');
    Route::post('about-us/update-team-director/{id}', [AboutUsController::class, 'updateTeamDirector'])->name('admin.update-team-director');
    
    Route::post('about-us/add-team-teacher', [AboutUsController::class, 'addTeamTeacher'])->name('admin.add-team-teacher');
    Route::post('about-us/update-team-teacher/{id}', [AboutUsController::class, 'updateTeamTeacher'])->name('admin.update-team-teacher');
    
    Route::post('about-us/add-team-stiching', [AboutUsController::class, 'addTeamStiching'])->name('admin.add-team-stiching');
    Route::post('about-us/update-team-stiching/{id}', [AboutUsController::class, 'updateTeamStiching'])->name('admin.update-team-stiching');
    
    Route::post('about-us/add-team-helpers', [AboutUsController::class, 'addTeamHelper'])->name('admin.add-team-helper');
    Route::post('about-us/update-team-helpers/{id}', [AboutUsController::class, 'updateTeamHelper'])->name('admin.update-team-helper');
    
    Route::post('about-us/add-team-gardener', [AboutUsController::class, 'addTeamGardener'])->name('admin.add-team-gardener');
    Route::post('about-us/update-team-gardener/{id}', [AboutUsController::class, 'updateTeamGardener'])->name('admin.update-team-gardener');
    
    Route::get('about-us/supporters', [AboutUsController::class, 'ourSupporters'])->name('admin.about-us.supporters');

    Route::get('about-us/gallery', [AboutUsController::class, 'gallery'])->name('admin.about-us.gallery');
    Route::post('about-us/add-gallery-image', [AboutUsController::class, 'postGallery'])->name('admin.add-gallery-image');
    Route::get('about-us/update-gallery/{id}', [AboutUsController::class, 'updateGallery'])->name('admin.update-gallery');
    Route::get('about-us/delete-gallery/{id}', [AboutUsController::class, 'deleteGallery'])->name('admin.delete-gallery');

    // ------------------------------------------------------------------------------------------


    // ---------------------------------------- OUR WORK ----------------------------------------
    Route::get('our-work/school', [OurWorkController::class, 'school'])->name('admin.our-work.school');
    Route::get('our-work/alumni', [OurWorkController::class, 'alumniProgram'])->name('admin.our-work.alumni');
    Route::post('our-work-add-alumni', [OurWorkController::class, 'postAlumniProgram'])->name('admin.work-add-alumni');
    Route::post('our-work-update-alumni', [OurWorkController::class, 'updateAlumniProgram'])->name('admin.work-update-alumni');
    Route::get('our-work/community', [OurWorkController::class, 'communityOutreach'])->name('admin.our-work.community');
    Route::post('our-work-add-community', [OurWorkController::class, 'postCommunityOutreach'])->name('admin.work-add-community');
    Route::post('our-work-update-community', [OurWorkController::class, 'updateCommunityOutreach'])->name('admin.work-update-community');
    // ------------------------------------------------------------------------------------------

    // ---------------------------------------- OUR IMPACT   ----------------------------------------
    Route::get('our-impact/students', [OurImpactController::class, 'students'])->name('admin.our-impact.students');
    Route::get('our-impact/add-students', [OurImpactController::class, 'addStudent'])->name('admin.add-impact.students');
    Route::post('our-impact/save-students', [OurImpactController::class, 'postStudent'])->name('admin.save-impact.students');
    Route::get('our-impact/edit-students/{id}', [OurImpactController::class, 'editStudent'])->name('admin.edit-impact.students');
    Route::post('our-impact/update-students/{id}', [OurImpactController::class, 'updateStudent'])->name('admin.update-impact.students');
    Route::get('our-impact/delete-students/{id}', [OurImpactController::class, 'deleteStudent'])->name('admin.delete-impact.student');
    Route::get('our-impact/alumni', [OurImpactController::class, 'alumni'])->name('admin.our-impact.alumni');
    Route::post('our-impact/add-alumni', [OurImpactController::class, 'postAlumni'])->name('admin.add-impact.alumni');
    Route::post('our-impact/update-alumni', [OurImpactController::class, 'updateAlumni'])->name('admin.update-impact.alumni');
    Route::get('our-impact/community', [OurImpactController::class, 'community'])->name('admin.our-impact.community');
    Route::post('our-impact/add-community', [OurImpactController::class, 'postCommunity'])->name('admin.add-impact.community');
    Route::post('our-impact/update-community', [OurImpactController::class, 'updateCommunity'])->name('admin.update-impact.community');
    // ------------------------------------------------------------------------------------------
    

    // ---------------------------------------- DONATIONS ----------------------------------------
    Route::get('donations', [DonationController::class, 'index'])->name('admin.donations');
    // ------------------------------------------------------------------------------------------
});