<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;

class OurWorkController extends Controller
{
    public function school(){
        return view('admin.our-work.school');
    }

    public function alumniProgram(){
        $alumni = Work::where('type', 'alumni')->first();
        return view('admin.our-work.alumni-program', compact('alumni'));
    }


    public function postAlumniProgram(Request $request){
        $alumni = new Work;
        $alumni->type = 'alumni';
        $alumni->text = $request->text;
        if($alumni->save()) {
            return back()->with('success', 'Alumni Saved Successfully');
        }
    }

    public function updateAlumniProgram(Request $request){
        $alumni = Work::where('type', 'alumni')->first();
        $alumni->text = $request->text;
        if($alumni->save()) {
            return back()->with('success', 'Alumni Saved Successfully');
        }
    }

    public function communityOutreach(){
        $community = Work::where('type', 'community')->first();
        return view('admin.our-work.community-outreach', compact('community'));
    }

    public function postCommunityOutreach(Request $request){
        $community = new Work;
        $community->type = 'community';
        $community->text = $request->text;
        if($community->save()) {
            return back()->with('success', 'Community Saved Successfully');
        }
    }

    public function updateCommunityOutreach(Request $request){
        $community = Work::where('type', 'community')->first();
        $community->text = $request->text;
        if($community->save()) {
            return back()->with('success', 'Community Saved Successfully');
        }
    }
}
