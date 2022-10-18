<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function theSchool(){
        return view('monsoon-kids-school');
    }

    public function alumniProgram(){
        return view('alumni-program');
    }

    public function communityOutreach(){
        return view('community-outreach');
    }
}
