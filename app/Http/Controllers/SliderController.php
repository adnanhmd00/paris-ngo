<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');    
    }


    public function store(Request $request){
        $validate = $request->validate([
            'image' => 'required'
        ]);

        try{
            $slider = new Slider;
            $slider->text = $request->text;
            $slider->sub_text = $request->sub_text;
            $slider->status = $request->status;
            if($request->hasFile('image')){
                $random = Str::random(10);
                $sliderName = $random.'.'.$request->image->extension();
                $slider->image = $request->image->storeAs('sliders', $sliderName, 'public');
            }
            if($slider->save()){
                return redirect()->route('admin.slider-settings')->with('success', 'Your Slider Has Been Added Successfully.');
            }
        }
        catch(Exception $e){
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function edit($id){
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id){
        try{
            $slider = Slider::where('id', $id)->first();
            $slider->text = $request->text;
            $slider->sub_text = $request->sub_text;
            $slider->status = $request->status;
            if($request->hasFile('image')){
                $random = Str::random(10);
                $sliderName = $random.'.'.$request->image->extension();
                $slider->image = $request->image->storeAs('sliders', $sliderName, 'public');
            }else{
                $slider->image = $request->prev_image;
            }
            if($slider->save()){
                return back()->with('success', 'Your Slider Has Been Updated Successfully');
            }
        }
        catch(Exception $e){
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
