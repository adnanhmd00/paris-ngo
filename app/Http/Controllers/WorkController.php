<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\School;

class WorkController extends Controller
{
    public function theSchool(){
        $principle = School::where('type', 'principles')->first();
        $graph = School::where('type', 'graph')->first();
        $infra = School::where('type', 'infra')->first();
        $curricullum_text = School::where('type', 'curricullum')->first();
        $curricullum = School::where('type', 'curricullum')->get();
        return view('monsoon-kids-school', compact('principle', 'graph', 'infra', 'curricullum_text', 'curricullum'));
    }

    public function sewingClasses(){
        $sewing_text = Work::where('type', 'sewing-classes')->first();
        $sewing_image = Work::where('type', 'sewing-images')->get();
        return view('sewing-classes', compact('sewing_text', 'sewing_image'));
    }
    public function alumniProgram(){
        $alumni = Work::where('type', 'alumni')->first();
        return view('alumni-program', compact('alumni'));
    }

    public function communityOutreach(){
        $community = Work::where('type', 'community')->get();
        return view('community-outreach', compact('community'));
    }
}
