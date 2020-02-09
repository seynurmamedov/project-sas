<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function getCategory(){
        $result = Category::get();
        return view('admin.category',['results'=>$results]);
    }
}
