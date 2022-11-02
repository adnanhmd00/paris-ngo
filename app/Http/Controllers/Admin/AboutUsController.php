<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function vision(){
        return view('admin.about-us.vision');
    }

    public function ourStory(){
        return view('admin.about-us.story');
    }

    public function ourTeam(){
        return view('admin.about-us.team');
    }

    public function ourSupporters(){
        return view('admin.about-us.supporters');
    }

    public function gallery(){
        return view('admin.about-us.gallery');
    }
    
}
