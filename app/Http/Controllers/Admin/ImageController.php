<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Images;

class ImageController extends Controller
{
    public function getImageDelete(Request $request){
        Images::where(['id'=>$request->id])->update([
            'is_delete'=>1
        ]);
    }
}
