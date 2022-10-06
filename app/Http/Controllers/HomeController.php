<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Gallery;

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
        $about = AboutUs::first();
        return view('welcome', compact('user', 'sliders', 'about'));
    }

    public function gallery(){
        $galleries = Gallery::where('status', '1')->get();
        return view('gallery', compact('galleries'));
    }
}
