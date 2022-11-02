<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurWorkController extends Controller
{
    public function school(){
        return view('admin.our-work.school');
    }

    public function alumniProgram(){
        return view('admin.our-work.alumni-program');
    }

    public function communityOutreach(){
        return view('admin.our-work.community-outreach');
    }
}
