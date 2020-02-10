<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SizeStatic;
use App\Models\ColorStatic;

class ProductController extends Controller
{
    public function getProduct(){
        $results = Product::where(['is_delete'=>0])->get();
        
        return view('admin.product',['results'=>$results]);
    }
    public function getInsertProduct(){
        $results = Product::where(['is_delete'=>0])->get();
        $colors= ColorStatic::get();
        $sizes= SizeStatic::get();
        return view('admin.insert-product',['results'=>$results,'sizes'=>$sizes,'colors'=>$colors]);
    }
    public function postInsertProduct(Request $request){
        $request->request->remove('_token');
        $images = $request->file('images');
        foreach($images as $image){
            $newurl =str_random(16).'.'.$image->getClientOriginalExtension();
            $destinationPath = 'img/uploads';
            $image->move($destinationPath,$newurl);
        }
        
        return $images;
    } 
}
