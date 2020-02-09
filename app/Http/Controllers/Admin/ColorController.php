<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Http\Requests\ColorRequest;
use Illuminate\Support\Facades\Session;

class ColorController extends Controller
{
    public function getColor(){
        $results = Color::where(['is_delete'=>0])->get();
        return view('admin.color',['results'=>$results]);
    }
    public function postColor(ColorRequest $request){
        $request->request->remove('_token');
        if($request->get('id')){
            Color::where(['id'=>$request->get('id')])->
            update([
                'name'=>$request->get('name'),
                'code'=>$request->get('code'),
                'is_active'=>$request->get('is_active')
            ]);
        }
        else{
            Color::create([
            'name'=>$request->get('name'),
            'code'=>$request->get('code'),
            'is_active'=>$request->get('is_active')
            ]);
            session()->put('success-message','Added to the database.');
        }
        return redirect()->route('getColor');
    }
    public function getColorDelete($id){
        Color::where(['id'=>$id])->update([
            'is_delete'=>1
        ]);
        return redirect()->route('getColor');
    }
}

