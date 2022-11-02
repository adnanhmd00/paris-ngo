<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurImpactController extends Controller
{
    public function students(){
        return view('admin.impact.students');
    }

    public function alumni(){
        return view('admin.impact.alumni');
    }

    public function community(){
        return view('admin.impact.community');
    }
}
