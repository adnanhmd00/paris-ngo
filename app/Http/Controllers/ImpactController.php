<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpactController extends Controller
{
    public function students(){
        return view('impact-students');
    }

    public function alumni(){
        return view('impact-alumni');
    }

    public function community(){
        return view('impact-community');
    }
}
