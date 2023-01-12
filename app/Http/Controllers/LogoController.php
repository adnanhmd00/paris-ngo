<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use Str;
class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logo = Logo::first();
        // dd($logo);
        return view('admin.logo-settings', compact('logo'));
    }

    public function store(Request $request){
        $validate = $request->validate([
            'logo' => 'required'
        ]);

        try{
            $logo = new Logo;
            if($request->hasFile('logo')){
                $random = Str::random(10);
                $logoName = $random.'.'.$request->logo->extension();
                $logo->logo = $request->logo->storeAs('logo', $logoName, 'public');
            }
            if($logo->save()){
                return back()->with('success', 'Congrats! Your Logo Has Been Added');
            }
        }
        catch(Exception $e){
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'logo' => 'required|mimes:png'
        ]);

        try{
            $logo = Logo::where('id', $id)->first();
            if($request->hasFile('logo')){
                $random = Str::random(10);
                $logoName = $random.'.'.$request->logo->extension();
                $logo->logo = $request->logo->storeAs('logo', $logoName, 'public');
            }
            if($logo->save()){
                return back()->with('success', 'Congrats! Your Logo Has Been Added');
            }
        }
        catch(Exception $e){
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
