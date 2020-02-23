<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function getProducts(){
        $results = Product::where(['is_delete'=>0,'is_active'=>1])->paginate(8);
        return view('site.home-page',['results'=>$results]);
    }
    public function getProductSingle($id){
        $result = Product::where(['id'=>$id])->first();
        return view('site.product-page',['result'=>$result]);
    }
}
