<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Size;
class SizeController extends Controller
{
    public function getSize(){
        $results = Size::get();
        return view('*****',['results'=>$results]);
    }
}
