<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Models\Vision;
use App\Models\Story;
use App\Models\Team;
use App\Models\Testimonial;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();
        return view('admin.about.index', compact('about'));
    }   
    
    public function update(Request $request){
        $about = AboutUs::first();
        if($about == ''){
            $about = new AboutUs;
        }else{
            $about = AboutUs::first();
        }
        $about->about_us = $request->about_us;
        if($about->save()){
            return back()->with('success', 'About Us Updated Successfully');
        }
    }

    public function vision(){
        $vision = Vision::first();
        return view('about-us-vision', compact('vision'));
    }

    public function ourStory(){
        $story = Story::first();
        return view('our-story', compact('story'));
    }

    public function ourTeam(){
        $directors = Team::where('type', 'director')->get();
        $teachers = Team::where('type', 'teacher')->get();
        $headmistresses = Team::where('type', 'headmistress')->get();
        $stiching = Team::where('type', 'stiching')->get();
        $helpers = Team::where('type', 'helper')->get();
        // $gardeners = Team::where('type', 'gardener')->get();
        return view('our-team', compact('directors', 'teachers', 'headmistresses', 'stiching', 'helpers'));
    }

    public function testimonials(){
        $testimonials = Testimonial::where('status', 1)->get();
        return view('about-us-testimonials', compact('testimonials'));
    }

    public function gallery(){
        return view('gallery2');
    }
}
     
     
     
    
    
        
    
    
     
     
     
     
     
    
    
        
    