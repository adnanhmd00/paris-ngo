<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Gallery;
use App\Models\CoverImage;
use App\Models\BoxText;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $sliders = Slider::where('status', '1')->get();
        $cover_image = CoverImage::where('status', '1')->take(5)->get();
        $box_text = BoxText::take(3)->get();

        $about = AboutUs::first();
        return view('welcome', compact('user', 'sliders', 'about', 'cover_image', 'box_text'));
    }

    public function gallery(){
        $galleries = Gallery::where('status', '1')->get();
        return view('gallery', compact('galleries'));
    }

    public function aboutUs(){
        return view('about-us-vision');
    }

    public function boardOfDirectors(){
        return view('board-of-directors');
    }

    public function schoolHistory(){
        return view('school-history');
    }

    public function school(){
        return view('school');
    }

    public function schoolTeacher(){
        return view('teacher');
    }

    public function sponsorAStudent(){
        return view('sponsor-a-student');
    }

    public function sponsorAClass(){
        return view('sponsor-a-class');
    }

    public function giftStudentSponsorship(){
        return view('student-sponsorship');
    }

    public function contactUs(){
        return view('contact-us');
    }

    public function termsAndConditions(){
        return view('terms-and-conditions');
    }

    public function privacyPolicy(){
        return view('privacy-policy');
    }
}
