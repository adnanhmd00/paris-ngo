<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

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
}
     
     
     
    
    
        
    
    
     
     
     
     
     
    
    
        
    