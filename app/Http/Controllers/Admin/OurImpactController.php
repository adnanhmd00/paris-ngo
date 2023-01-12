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
        $alumnis = Impact::where('type', 'alumni')->get();
        return view('admin.our-impact.alumni', compact('alumnis'));
    }

    public function postAlumni(Request $request){
        $alumni = new Impact;
        $alumni->text = $request->text;
        $alumni->type = 'alumni';
        $alumni->file_type = $request->file_type;
                
        if($request->youtube != null){
            $alumni->image = $request->youtube;
        }
        
        if($request->facebook != null){
            $alumni->image = $request->facebook;
        }

        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $alumni->image = $request->image->storeAs('alumni', $imgName, 'public');
        }else if ($request->has('video')) {
            $path = $request->file('video')->store('videos', ['disk' => 'alumni-videos']);
            $alumni->image = $path;
        }
        if($alumni->save()){
            return back()->with('success', 'Alumni Data saved successfully');
        }
    }

    public function updateAlumni(Request $request, $id){
        // dd($request->all());
        $alumni = Impact::findOrFail($id);
        // dd($alumni);
        $alumni->text = $request->text;
        $alumni->type = 'alumni';
        
        if($request->file_type == null){
            $alumni->file_type = $alumni->file_type;
        }else{
            $alumni->file_type = $request->file_type;
        }
        
        if($request->youtube != null){
            $alumni->image = $request->youtube;
        }
        
        if($request->facebook != null){
            $alumni->image = $request->facebook;
        }

        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $alumni->image = $request->image->storeAs('alumni', $imgName, 'public');
        }else if ($request->has('video')) {
            $path = $request->file('video')->store('videos', ['disk' => 'alumni-videos']);
            $alumni->image = $path;
        }
        if($alumni->save()){
            return back()->with('success', 'Alumni Data saved successfully');
        }
    }

    public function deleteAlumni($id){
        $alumni = Impact::where('type', 'alumni')->first();
        if($alumni->delete()){
            return back()->with('succes', 'Alumni Data deleted successfully');
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
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $community->image = $request->image->storeAs('impact-community', $imgName, 'public');
        }
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
