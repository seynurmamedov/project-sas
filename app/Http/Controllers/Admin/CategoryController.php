<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function getCategory(){
        $results = Category::where(['is_delete'=>0])->get();
        return view('admin.category',['results'=>$results]);
    }

    public function postCategory(CategoryRequest $request){
        $request->request->remove('_token');
        if($request->get('id')){
            Category::where(['id'=>$request->get('id')])->
            update([
                'name'=>$request->get('name'),
                'is_active'=>$request->get('is_active')
            ]);
        }
        else{
            Category::create([
                'name'=>$request->get('name'),
                'is_active'=>$request->get('is_active')
            ]);
            session()->put('success-message','Added to the database.');
        }
        return redirect()->route('getCategory');
    }
    
    public function getCategoryDelete($id){
        Category::where(['id'=>$id])->update([
            'is_delete'=>1
        ]);
        return redirect()->route('getCategory');
    }
}
