<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    public function theSchool(){
        return view('monsoon-kids-school');
    }

    public function alumniProgram(){
        $alumni = Work::where('type', 'alumni')->first();
        return view('alumni-program', compact('alumni'));
    }

    public function communityOutreach(){
        $community = Work::where('type', 'community')->first();
        return view('community-outreach', compact('community'));
    }
}
