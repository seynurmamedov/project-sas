<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Color;

class ColorController extends Controller
{
    public function getColor(){
        $results = Color::get();
        return view('admin.color',['results'=>$results]);
    }
    public function postColor(Request $request){
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
        }
        return redirect()->route('getColor');
    }
    public function getColorDelete($id){
        Color::where(['id'=>$id])->delete();
        return redirect()->route('getColor');
    }
}
