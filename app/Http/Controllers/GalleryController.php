<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Gallery::all();
        return view('admin.gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');    
    }


    public function store(Request $request){
        $validate = $request->validate([
            'image' => 'required'
        ]);

        try{
            $gallery = new Gallery;
            $gallery->status = $request->status;
            if($request->hasFile('image')){
                $random = Str::random(10);
                $galleryName = $random.'.'.$request->image->extension();
                $gallery->image = $request->image->storeAs('gallery', $galleryName, 'public');
            }
            if($gallery->save()){
                return redirect()->route('admin.gallery')->with('success', 'Your Image Has Been Added Successfully.');
            }
        }
        catch(Exception $e){
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function edit($id){
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function destroy($id){
        $image = Gallery::findOrFail($id);
        if($image->delete()){
            return back()->with('success', 'Your Image Has Been Deleted Successfully');
        }
    }

    public function update($id){
        $image = Gallery::findOrFail($id);
        if($image->status == 1){
            $image->status = 0;
        }else{
            $image->status = 1;
        }
        if($image->save()){
            return back()->with('success', 'Image Status Updated Successfully');
        }
    }

    
}
