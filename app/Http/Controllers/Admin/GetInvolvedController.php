<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Volunteer;
use App\Models\WorkWithUs;

class GetInvolvedController extends Controller
{
    public function donate(){
        return view('admin.get-involved.donate');
    }

    public function volunteer(){
        $volunteers = Volunteer::all();
        return view('admin.get-involved.volunteer', compact('volunteers'));
    }

    public function workWithUs(){
        $works = WorkWithUs::all();
        return view('admin.get-involved.work-with-us', compact('works'));
    }
}
