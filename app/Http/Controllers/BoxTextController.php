<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoxText;

class BoxTextController extends Controller
{
    public function index(){
        $texts = BoxText::all();
        return view('admin.box-text.index', compact('texts'));
    }

    public function create(){
        return view('admin.box-text.create');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'text' => 'required',
        ]);

        $txt = new BoxText;
        $txt->text = $request->text;
         if(($txt->save())){
            return redirect()->route('admin.box-texts')->with('success', 'Text Added Successfully');
         }
    }

    public function edit($id){
        $txt = BoxText::findOrFail($id);
        return view('admin.box-text.edit', compact('txt'));
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'text' => 'required',
        ]);

        $txt = BoxText::findOrFail($id);
        $txt->text = $request->text;
         if($txt->save()){
            return redirect()->route('admin.box-texts')->with('success', 'Text Updated Successfully');
         }
    }
}
