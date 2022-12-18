<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vision;
use App\Models\Story;
use App\Models\Team;
use App\Models\Gallery;
use App\Models\Testimonial;
use Str;

class AboutUsController extends Controller
{
    public function vision(){
        $vision = Vision::first();
        return view('admin.about-us.vision', compact('vision'));
    }

    public function postVision(Request $request){
        $vision = new Vision;
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $vision->image = $request->image->storeAs('vision', $imgName, 'public');
        }
        $vision->text = $request->text;
        if($vision->save()){
            return back()->with('success', 'Vision saved successfully');
        }
    }

    public function updateVision(Request $request){
        $vision = Vision::first();
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $vision->image = $request->image->storeAs('vision', $imgName, 'public');
        }
        $vision->text = $request->text;
        if($vision->save()){
            return back()->with('success', 'Vision saved successfully');
        }
    }

    public function ourStory(){
        $story = Story::first();
        return view('admin.about-us.story', compact('story'));
    }

    public function postStory(Request $request){
        $story = new Story;
        $story->story = $request->story;
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $vision->image = $request->image->storeAs('stories', $imgName, 'public');
        }
        if($story->save()){
            return back()->with('success', 'Story saved successfully');
        }
    }

    public function updateStory(Request $request){
        $story = Story::first();
        $story->story = $request->story;
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $story->image = $request->image->storeAs('stories', $imgName, 'public');
        }
        if($story->save()){
            return back()->with('success', 'Story saved successfully');
        }
    }


    public function ourTeam(){
        $teams = Team::all();
        $directors = Team::where('type', 'director')->get();
        $teachers = Team::where('type', 'teacher')->get();
        $headmistresses = Team::where('type', 'headmistress')->get();
        $stichings = Team::where('type', 'stiching')->get();
        $helpers = Team::where('type', 'helper')->get();
        $gardeners = Team::where('type', 'gardener')->get();
        return view('admin.about-us.team', compact('teams', 'directors', 'teachers', 'headmistresses', 'stichings', 'helpers', 'gardeners'));
    }

    public function addTeamDirector(Request $request){
        $team = new Team;
        $team->name = $request->name;
        $team->position = $request->position;
        $team->type = 'director';
        if($team->save()){
            return back()->with('success', 'Director saved successfully');
        }
    }

    public function updateTeamDirector(Request $request, $id){
        $team = Team::findOrFail($id);
        $team->name = $request->name;
        $team->position = $request->position;
        if($team->save()){
            return back()->with('success', 'Director saved successfully');
        }
    }

    public function addTeamTeacher(Request $request){
        $team = new Team;
        $team->name = $request->name;
        $team->type = 'teacher';
        if($team->save()){
            return back()->with('success', 'Teacher saved successfully');
        }
    }

    public function updateTeamTeacher(Request $request, $id){
        $team = Team::findOrFail($id);
        $team->name = $request->name;
        if($team->save()){
            return back()->with('success', 'Teacher saved successfully');
        }
    }

    public function addTeamHeadMistress(Request $request){
        $team = new Team;
        $team->name = $request->name;
        $team->type = 'headmistress';
        if($team->save()){
            return back()->with('success', 'Head Mistress saved successfully');
        }
    }

    public function updateTeamHeadMistress(Request $request, $id){
        $team = Team::findOrFail($id);
        $team->name = $request->name;
        if($team->save()){
            return back()->with('success', 'Head Mistress saved successfully');
        }
    }

    public function addTeamStiching(Request $request){
        $team = new Team;
        $team->name = $request->name;
        $team->type = 'stiching';
        if($team->save()){
            return back()->with('success', 'Stiching saved successfully');
        }
    }

    public function updateTeamStiching(Request $request, $id){
        $team = Team::findOrFail($id);
        $team->name = $request->name;
        if($team->save()){
            return back()->with('success', 'Stiching saved successfully');
        }
    }

    public function addTeamHelper(Request $request){
        $team = new Team;
        $team->name = $request->name;
        $team->type = 'helper';
        if($team->save()){
            return back()->with('success', 'Helpers saved successfully');
        }
    }

    public function updateTeamHelper(Request $request, $id){
        $team = Team::findOrFail($id);
        $team->name = $request->name;
        if($team->save()){
            return back()->with('success', 'Helpers saved successfully');
        }
    }

    public function addTeamGardener(Request $request){
        $team = new Team;
        $team->name = $request->name;
        $team->type = 'gardener';
        if($team->save()){
            return back()->with('success', 'Helpers saved successfully');
        }
    }

    public function updateTeamGardener(Request $request, $id){
        $team = Team::findOrFail($id);
        $team->name = $request->name;
        if($team->save()){
            return back()->with('success', 'Helpers saved successfully');
        }
    }


    public function testimonials(){
        $testimonials = Testimonial::all();
        return view('admin.about-us.testimonials', compact('testimonials'));
    }
    
    public function addTestimonials(Request $request){
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->text = $request->text;
        $testimonial->status = '1';
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $testimonial->image = $request->image->storeAs('testimonials', $imgName, 'public');
        }
        if($testimonial->save()){
            return back()->with('success', 'Testimonial saved successfully');
        }
    }

    public function gallery(){
        $galleries = Gallery::all();
        return view('admin.about-us.gallery', compact('galleries'));
    }

    public function postGallery(Request $request){
        $gallery = new Gallery;
        $gallery->status = 1;
        if($request->hasFile('image')){
            $random = Str::random(10);
            $imgName = $random.'.'.$request->image->extension();
            $gallery->image = $request->image->storeAs('gallery', $imgName, 'public');
        }
        if($gallery->save()){
            return back()->with('success', 'Image saved successfully');
        }
    }

    public function updateGallery($id){
        $gallery = Gallery::findOrFail($id);
        if($gallery->status == 1){
            $gallery->status = 0;
        }else{
            $gallery->status = 1;
        }
            
        if($gallery->save()){
            return back()->with('success', 'Image status updated successfully');
        }
    }

    public function deleteGallery($id){
        $gallery = Gallery::findOrFail($id);
        if($gallery->delete()){
            return back()->with('success', 'Image deleted successfully');
        }
    }
}
