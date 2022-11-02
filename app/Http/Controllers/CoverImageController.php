<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoverImage;
use Str;

class CoverImageController extends Controller
{
    public function index(){
        $images = CoverImage::all();
        return view('admin.cover-images.index', compact('images'));
    }

    public function create()
    {
        return view('admin.cover-images.create');    
    }

    public function store(Request $request){
        $validate = $request->validate([
            'image' => 'required'
        ]);

        try{
            $image = new CoverImage;
            $image->text = $request->text;
            $image->status = $request->status;
            if($request->hasFile('image')){
                $random = Str::random(10);
                $imgName = $random.'.'.$request->image->extension();
                $image->image = $request->image->storeAs('cover-images', $imgName, 'public');
            }
            if($image->save()){
                return redirect()->route('admin.cover-images')->with('success', 'Your Cover Image Has Been Added Successfully.');
            }
        }
        catch(Exception $e){
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function edit($id){
        $image = CoverImage::findOrFail($id);
        return view('admin.cover-image.edit', compact('image'));
    }

    public function update(Request $request, $id){
        try{
            $image = CoverImage::where('id', $id)->first();
            $image->text = $request->text;
            $image->status = $request->status;
            if($request->hasFile('image')){
                $random = Str::random(10);
                $imgName = $random.'.'.$request->image->extension();
                $image->image = $request->image->storeAs('cover-images', $imgName, 'public');
            }else{
                $image->image = $request->prev_image;
            }
            if($slider->save()){
                return back()->with('success', 'Your Cover Image Has Been Updated Successfully');
            }
        }
        catch(Exception $e){
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
