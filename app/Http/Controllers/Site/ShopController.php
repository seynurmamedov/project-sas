<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use \Crypt;
use App\Models\SizeStatic;
use App\Models\ColorStatic;
use App\Models\Category;
class ShopController extends Controller
{
    public function getProductsShop(){
        $results = Product::where(['is_delete'=>0,'is_active'=>1])->paginate(8);
        $colors= ColorStatic::where(['is_delete'=>0])->get();
        $sizes= SizeStatic::get();
        $categories= Category::where(['is_delete'=>0])->get();
        return view('site.shop-page',['results'=>$results,'sizes'=>$sizes,'colors'=>$colors,'categories'=>$categories]);
    }
    public function filter(Request $request){
        $output=$request->category.$request->price.$request->size.$request->color.$request->sort;
        return Response($output);        
    }

}
