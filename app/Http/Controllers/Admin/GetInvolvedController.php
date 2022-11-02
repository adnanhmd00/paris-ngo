<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetInvolvedController extends Controller
{
    public function donate(){
        return view('admin.get-involved.donate');
    }

    public function volunteer(){
        return view('admin.get-involved.volunteer');
    }

    public function workWithUs(){
        return view('admin.get-involved.work-with-us');
    }
}
