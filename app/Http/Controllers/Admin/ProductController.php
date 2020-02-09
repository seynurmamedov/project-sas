<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProduct(){
        $results = Product::where(['is_delete'=>0])->get();
        return view('admin.Product',['results'=>$results]);
    }
}
