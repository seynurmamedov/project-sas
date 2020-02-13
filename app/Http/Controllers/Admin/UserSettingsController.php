<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class UserSettingsController extends Controller
{
    public function getSettingsUser(){
  
        return view('admin.settings-user');
    }
    public function postSettingsUser(Request $request){
        $request->request->remove('_token');
        $file = $request->file('prof_img');
        $user = Auth::user();
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->email = $request->get('email');
            if ($file) {
                $destinationPath = 'img/uploads';
                $newurl =str_random(16).'.'.$file->getClientOriginalExtension();
                $file->move($destinationPath,$newurl);
                $user->prof_img = $newurl;
            }

        $user->save();

        return redirect()->route('getSettingsUser');
    }
   
}
