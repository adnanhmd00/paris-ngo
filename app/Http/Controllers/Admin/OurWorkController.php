<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\School;
use Str;

class OurWorkController extends Controller
{
    public function school(){
        $datas = School::all();
        $principle = School::where('type', 'principles')->first();
        $graph = School::where('type', 'graph')->first();
        $infra = School::where('type', 'infra')->first();
        $curricullum = School::where('type', 'curricullum')->first();
        return view('admin.our-work.school', compact('datas', 'principle', 'graph', 'infra', 'curricullum'));
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


    public function sewingClasses(){
        $sewings = Work::where('type', 'sewing-classes')->first();
        $sewing_images = Work::where('type', 'sewing-images')->get();
        return view('admin.our-work.sewing-classes', compact('sewings', 'sewing_images'));
    }


    public function postSewingClasses(Request $request){
        $sewing = new Work;
        $sewing->type = 'sewing-classes';
        $sewing->text = $request->text;
        // if($request->hasFile('image')){
        //     $random = Str::random(10);
        //     $imgName = $random.'.'.$request->image->extension();
        //     $sewing->image = $request->image->storeAs('sewing-classes', $imgName, 'public');
        // }
        if($sewing->save()) {
            return back()->with('success', 'Sewing Classes Saved Successfully');
        }
    }

    public function addSewingImage(Request $request){
        $sewing = new Work;
        $sewing->type = 'sewing-images';
        $sewing->text = 'sewing-images';
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $sewing->image = $request->image->storeAs('sewing-classes', $imgName, 'public');
        }
        if($sewing->save()) {
            return back()->with('success', 'Sewing Classes Saved Success');
        }
    }



    public function deleteSewingImage(Request $request, $id){
        $sewing = Work::where('id', $id)->first();
        if($sewing->delete()){
            return back()->with('success', 'Sewing Image Deleted Successfully');
        }
    }
    

    public function updateSewingClasses(Request $request){
        $sewing = Work::where('type', 'sewing-classes')->first();
        $sewing->text = $request->text;
        // if($request->hasFile('image')){
        //     $random = Str::random(10);
        //     $imgName = $random.'.'.$request->image->extension();
        //     $sewing->image = $request->image->storeAs('sewing-classes', $imgName, 'public');
        // }
        if($sewing->save()) {
            return back()->with('success', 'Sewing Classes Saved Successfully');
        }
    }

    public function communityOutreach(){
        $community = Work::where('type', 'community')->get();
        return view('admin.our-work.community-outreach', compact('community'));
    }

    public function postCommunityOutreach(Request $request){
        $community = new Work;
        $community->type = 'community';
        $community->text = $request->text;
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $community->image = $request->image->storeAs('mahila-mandal', $imgName, 'public');
        }
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

    public function addPrinciple(){
        return view('admin.our-work.school.add-principles');
    }

    public function submitPrinciple(Request $request){
        // dd($request->all());
        $principle = new School;
        $principle->type = 'principles';
        $principle->title = 'Principles';
        $principle->content = $request->content;
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $principle->image = $request->image->storeAs('principles', $imgName, 'public');
        }
        if($principle->save()){
            return redirect()->route('admin.our-work.school')->with('success', 'Principles Added Successfully');
        }
    }


    public function editPrinciple(){
        $principle = School::where('type', 'principles')->first();
        return view('admin.our-work.school.edit-principles', compact('principle'));
    }

    public function updatePrinciple(Request $request){
        // dd($request->all());
        $principle = School::where('type', 'principles')->first();
        $principle->type = 'principles';
        $principle->title = 'Principles';
        $principle->content = $request->content;
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $principle->image = $request->image->storeAs('principles', $imgName, 'public');
        }
        if($principle->save()){
            return redirect()->route('admin.our-work.school')->with('success', 'Principles Added Successfully');
        }
    }


    public function addGraph(){
        return view('admin.our-work.school.add-graph');
    }

    public function submitGraph(Request $request){
        // dd($request->all());
        $graph = new School;
        $graph->type = 'graph';
        $graph->title = 'Graph';
        $graph->content = 'graph-content';
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $graph->image = $request->image->storeAs('graph', $imgName, 'public');
        }
        if($graph->save()){
            return redirect()->route('admin.our-work.school')->with('success', 'Graph Added Successfully');
        }
    }

    public function editGraph(){
        $graph = School::where('type', 'graph')->first();
        return view('admin.our-work.school.edit-graph', compact('graph'));
    }

    public function updateGraph(Request $request){
        // dd($request->all());
        $graph = School::where('type', 'graph')->first();
        $graph->type = 'graph';
        $graph->title = 'Graph';
        $graph->content = 'graph-content';
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $graph->image = $request->image->storeAs('graph', $imgName, 'public');
        }
        if($graph->save()){
            return redirect()->route('admin.our-work.school')->with('success', 'Graph Added Successfully');
        }
    }

    public function addSchoolInfra(){
        return view('admin.our-work.school.add-infra');
    }

    public function submitSchoolInfra(Request $request){
        // dd($request->all());
        $infra = new School;
        $infra->type = 'infra';
        $infra->title = 'School Infrastructure';
        $infra->content = $request->content;
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $infra->image = $request->image->storeAs('infra', $imgName, 'public');
        }
        if($infra->save()){
            return redirect()->route('admin.our-work.school')->with('success', 'Curricullum Added Successfully');
        }
    }

    public function editSchoolInfra(){
        $infra = School::where('type', 'infra')->first();
        return view('admin.our-work.school.edit-infra', compact('infra'));
    }

    public function updateSchoolInfra(Request $request){
        // dd($request->all());
        $infra = School::where('type', 'infra')->first();
        $infra->type = 'infra';
        $infra->title = 'School Infrastructure';
        $infra->content = $request->content;
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $infra->image = $request->image->storeAs('infra', $imgName, 'public');
        }
        if($infra->save()){
            return redirect()->route('admin.our-work.school')->with('success', 'Curricullum Added Successfully');
        }
    }

    public function addSchoolCurricullum(){
        $curricullum = School::where('type', 'curricullum')->first();
        return view('admin.our-work.school.add-curricullum', compact('curricullum'));
    }

    public function submitSchoolCurricullum(Request $request){
        $curricullum = new School;
        $curricullum->type = 'curricullum';
        $curricullum->title = 'School Curricullum';
        $curricullum->content = $request->content;
        $curricullum->image_first_text = $request->image_first_text;
        $curricullum->image_second_text = $request->image_second_text;
        
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $curricullum->image = $request->image->storeAs('curricullum', $imgName, 'public');
        }
        
        if($request->hasFile('second_image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $curricullum->second_image = $request->second_image->storeAs('curricullum', $imgName, 'public');
        }
        if($curricullum->save()){
            return redirect()->route('admin.our-work.school')->with('success', 'Curricullum Added Successfully');
        }
    }

    public function editSchoolCurricullum(){
        $content = School::where('type', 'curricullum')->first();
        $curricullums = School::where('type', 'curricullum')->get();
        return view('admin.our-work.school.edit-curricullum', compact('curricullums', 'content'));
    }

    public function editSingleCurricullum($id){
        $curricullum= School::where('id', $id)->first();
        $content = School::where('type', 'curricullum')->first();
        return view('admin.our-work.school.edit-single-curricullum', compact('curricullum', 'content'));
    }

    public function updateSchoolCurricullum(Request $request, $id){
        $curricullum = School::where('id', $id)->first();
        $curricullum->type = 'curricullum';
        $curricullum->title = 'School Curricullum';
        $curricullum->content = $request->content;
        $curricullum->image_first_text = $request->image_first_text;
        $curricullum->image_second_text = $request->image_second_text;
        
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $curricullum->image = $request->image->storeAs('curricullum', $imgName, 'public');
        }
        
        if($request->hasFile('second_image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $curricullum->second_image = $request->second_image->storeAs('curricullum', $imgName, 'public');
        }
        if($curricullum->save()){
            return redirect()->route('admin.our-work.school')->with('success', 'Curricullum Added Successfully');
        }
    }
}
    