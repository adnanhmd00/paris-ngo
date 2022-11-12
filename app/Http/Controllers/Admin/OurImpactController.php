<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Impact;
use Str;

class OurImpactController extends Controller
{
    public function students(){
        $students = Student::all();
        return view('admin.our-impact.students', compact('students'));
    }

    public function addStudent(){
        return view('admin.our-impact.add-student');
    }

    public function postStudent(Request $request){
        $student = new Student;
        $student->name = $request->name;
        $student->text = $request->text;
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $student->image = $request->image->storeAs('student', $imgName, 'public');
        }
        if($student->save()){
            return redirect()->route('admin.our-impact.students')->with('success', 'New Student Data saved successfully');
        }
    }

    public function editStudent($id){
        $student = Student::findOrFail($id);
        return view('admin.our-impact.edit-student', compact('student'));
    }

    public function updateStudent(Request $request, $id){
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->text = $request->text;
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $student->image = $request->image->storeAs('student', $imgName, 'public');
        }
        if($student->save()){
            return back()->with('success', 'New Student Data saved successfully');
        }
    }

    public function deleteStudent($id){
        $student = Student::findOrFail($id);
        if($student->delete()){
            return back()->with('success', 'Student Data deleted successfully');
        }
    }

    public function alumni(){
        $alumni = Impact::where('type', 'alumni')->first();
        return view('admin.our-impact.alumni', compact('alumni'));
    }

    public function postAlumni(Request $request){
        $alumni = new Impact;
        $alumni->text = $request->text;
        $alumni->type = 'alumni';
        if($alumni->save()){
            return back()->with('success', 'Alumni Data saved successfully');
        }
    }

    public function updateAlumni(Request $request){
    $alumni = Impact::where('type', 'alumni')->first();
        $alumni->text = $request->text;
        if($alumni->save()){
            return back()->with('succes', 'Alumni Data saved successfully');
        }
    }

    public function community(){
        $community = Impact::where('type', 'community')->first();    
        return view('admin.our-impact.community', compact('community'));
    }

    public function postCommunity(Request $request){
        $community = new Impact;
        $community->text = $request->text;
        $community->type = 'community';
        if($community->save()){
            return back()->with('success', 'Community Data saved successfully');
        }
    }

    public function updateCommunity(Request $request){
    $community = Impact::where('type', 'community')->first();
        $community->text = $request->text;
        if($community->save()){
            return back()->with('succes', 'Community Data saved successfully');
        }
    }
}
