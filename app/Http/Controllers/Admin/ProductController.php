<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SizeStatic;
use App\Models\ColorStatic;
use App\Models\Size;
use App\Models\Color;
use App\Models\Images;
use App\Models\Category;
class ProductController extends Controller
{
    public function getProduct(){
        $results = Product::where(['is_delete'=>0])->get();
        return view('admin.product',['results'=>$results]);
    }

    public function getInsertProduct(){
        $results = Product::where(['is_delete'=>0])->get();
        $colors= ColorStatic::where(['is_delete'=>0])->get();
        $sizes= SizeStatic::get();
        $categories= Category::where(['is_delete'=>0])->get();
        return view('admin.insert-product',['results'=>$results,'sizes'=>$sizes,'colors'=>$colors,'categories'=>$categories]);
    }

    public function postInsertProduct(Request $request){
        $request->request->remove('_token');
        $model=Product::create([
            "gender_id"=> $request->get('gender'),
            "cat_id"=> $request->get('category'),
            "title"=> $request->get('title'),
            "price"=>$request->get('price'),
            "text"=> $request->get('text'),
            "is_active"=> $request->get('is_active'),
            "stock"=> $request->get('count')
        ]);
        
        $sizes = $request->get('sizes');
        foreach($sizes as $size){
            Size::create([
                'p_id'=>$model->id,
                "name"=> $size
            ]);
        }

        $colors = $request->get('colors');
        foreach($colors as $color){
            Color::create([
                "color_id"=> $color,
                'p_id'=>$model->id
            ]);
        }

        $images = $request->file('images');
        foreach($images as $image){
            $newurl =str_random(16).'.'.$image->getClientOriginalExtension();
            $destinationPath = 'img/uploads';
            $image->move($destinationPath,$newurl);
            Images::create([
                'name'=>$newurl,
                'p_id'=>$model->id
            ]);
        }
        return redirect()->route('getProduct');
    } 

    public function getEditProduct($id){
        $results = Product::where(['id'=>$id])->get();
        $colors= ColorStatic::where(['is_delete'=>0])->get();
        $sizes= SizeStatic::get();
        $categories= Category::where(['is_delete'=>0])->get();
        return view('admin.edit-product',['results'=>$results,'sizes'=>$sizes,'colors'=>$colors,'categories'=>$categories]);
    }

    public function postEditProduct(Request $request,$id){
        $request->request->remove('_token');
        Product::where(['id'=>$id])->update([
            "gender_id"=> $request->get('gender'),
            "cat_id"=> $request->get('category'),
            "title"=> $request->get('title'),
            "price"=>$request->get('price'),
            "text"=> $request->get('text'),
            "is_active"=> $request->get('is_active'),
            "stock"=> $request->get('count')
        ]);
        $sizes = $request->get('sizes');
        Size::where(['p_id'=>$id])->delete();
        foreach($sizes as $size){
            Size::create([
                'p_id'=>$id,
                "name"=> $size
            ]);
        }

        $colors = $request->get('colors');
        Color::where(['p_id'=>$id])->delete();
        foreach($colors as $color){
            Color::create([
                "color_id"=> $color,
                'p_id'=>$id
            ]);
        }

        if($request->file('images')){
        $images = $request->file('images');
            foreach($images as $image){
                $newurl =str_random(16).'.'.$image->getClientOriginalExtension();
                $destinationPath = 'img/uploads';
                $image->move($destinationPath,$newurl);
                Images::update([
                    'name'=>$newurl,
                    'p_id'=>$id
                ]);
            }
        }
        return redirect()->route('getProduct');
    }

    public function getDeleteProduct($id){

        Product::where(['id'=>$id])->update([
            'is_delete'=>1
        ]);

        Size::where(['p_id'=>$id])->update([
            'is_delete'=>1
        ]);

        Color::where(['p_id'=>$id])->update([
            'is_delete'=>1
        ]);

        Images::where(['p_id'=>$id])->update([
            'is_delete'=>1
        ]);
        
        return redirect()->route('getProduct');
    }

   
}
