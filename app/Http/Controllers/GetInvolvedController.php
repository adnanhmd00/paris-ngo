<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use App\Models\WorkWithUs;

class GetInvolvedController extends Controller
{
    public function volunteer(){
        return view('volunteer');
    }

    public function storeVolunteer(Request $request){
        $volunteer =  new Volunteer;
        $volunteer->first_name = $request->first_name;
        $volunteer->second_name = $request->second_name;
        $volunteer->days_available = json_encode($request->days_available);
        $volunteer->area_of_interest = $request->area_of_interest;
        $volunteer->skills = json_encode($request->skills);
        $volunteer->phone = $request->phone;
        $volunteer->email = $request->email;
        $volunteer->contact_by = $request->contact_by;
        $volunteer->student = $request->student;
        if($volunteer->save()){
            return back()->with('success', 'Your form has been submitted');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }
    
    public function workWithUs(){
        return view('work-with-us');
    }

    
    public function storeWorkWithUs(Request $request){
        $volunteer =  new WorkWithUs;
        $volunteer->name = $request->name;
        $volunteer->phone = $request->phone;
        $volunteer->email = $request->email;
        $volunteer->qualification = $request->qualification;
        if($volunteer->save()){
            return back()->with('success', 'Your form has been submitted');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }
}
