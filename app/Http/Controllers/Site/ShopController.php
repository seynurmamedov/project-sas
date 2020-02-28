<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use \Crypt;
class ShopController extends Controller
{
    public function getProductsShop(){
        $results = Product::where(['is_delete'=>0,'is_active'=>1])->paginate(8);
        return view('site.shop-page',['results'=>$results]);
    }
    public function getProductSingle($id){
        $id = Crypt::decrypt($id); 
        $result = Product::where(['id'=>$id])->first();
        return view('site.product-page',['result'=>$result]);
    }
}
