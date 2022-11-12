<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Impact;

class ImpactController extends Controller
{
    public function students(){
        $students = Student::all();
        return view('impact-students', compact('students'));
    }

    public function alumni(){
        $alumni = Impact::where('type', 'alumni')->first();
        return view('impact-alumni', compact('alumni'));
    }

    public function community(){
        $community = Impact::where('type', 'community')->first();
        return view('impact-community', compact('community'));
    }
}
