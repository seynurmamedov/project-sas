<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gender;
class GenderController extends Controller
{
    public function getGender(){
        $results = Gender::get();
        // return view('admin.welcome',['results'=>$results]);
    }
}
