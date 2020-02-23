<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SizeStatic;
use App\Models\ColorStatic;
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

        $preview=$request->preview;
        $previewnewurl =str_random(16).'.'.$preview->getClientOriginalExtension();
        $destinationPath = 'img/uploads';
        $preview->move($destinationPath,$previewnewurl);
        $p_code=str_random(8);
        $model=Product::create([
            "gender_id"=> $request->get('gender'),
            "cat_id"=> $request->get('category'),
            "preview"=> $previewnewurl,
            "title"=> $request->get('title'),
            "price"=>$request->get('price'),
            "text"=> $request->get('text'),
            "is_active"=> $request->get('is_active'),
            "stock"=> $request->get('count'),
            "p_code"=> $p_code
        ]);
        
        $sizes=Product::find($model->id)->Size();
        foreach($request->get('sizes') as $size){
            $sizes->create(['p_id'=>$model->id,'name'=> $size]);
        }

        $colors=Product::find($model->id)->Color();
        foreach($request->get('colors') as $color){
            $colors->create(['p_id'=>$model->id,'color_id'=> $color]);
        }


        foreach($request->file('images') as $image){
            $newurl =str_random(16).'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath,$newurl);
            $images=Product::find($model->id)->Images();
            $images->create(['p_id'=>$model->id,'name'=> $newurl]);
        }
        return redirect()->route('getProduct');
    } 

    public function getEditProduct($id){
        $results = Product::where(['id'=>$id])->get();
        $colors= ColorStatic::where(['is_delete'=>0])->get();
        $sizes= SizeStatic::get();
        $categories= Category::where(['is_delete'=>0])->get();
        return view('admin.edit-product',[
            'results'=>$results,
            'sizes'=>$sizes,
            'colors'=>$colors,
            'categories'=>$categories
        ]);
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
        if($request->preview){
            $preview=$request->preview;
            $previewnewurl =str_random(16).'.'.$preview->getClientOriginalExtension();
            $destinationPath = 'img/uploads';
            $preview->move($destinationPath,$previewnewurl);
            Product::where(['id'=>$id])->update([
                "preview"=> $previewnewurl,
            ]);
        }
        Product::find($request->id)->Size()->delete();
        $sizes=Product::find($request->id)->Size();
        foreach($request->get('sizes') as $size){
            $sizes->create(['p_id'=>$id,'name'=> $size]);
        }

        Product::find($request->id)->Color()->delete();
        $colors=Product::find($request->id)->Color();
        foreach($request->get('colors') as $color){
            $colors->create(['p_id'=>$id,'color_id'=> $color]);
        }
        if($request->file('images')){
            foreach($request->file('images') as $image){
                $newurl =str_random(16).'.'.$image->getClientOriginalExtension();
                $destinationPath = 'img/uploads';
                $image->move($destinationPath,$newurl);
                $images=Product::find($id)->Images();
                $images->create(['p_id'=>$id,'name'=> $newurl]);
            }
        }
        return redirect()->route('getProduct');
    }

    public function getDeleteProduct($id){

        Product::where(['id'=>$id])->update([
            'is_delete'=>1
        ]);

        Product::find($id)->Color()->delete();
        Product::find($id)->Size()->delete();
        Product::find($id)->Images()->update([
            'is_delete'=>1
        ]);
        
        return redirect()->route('getProduct');
    }

   
}
