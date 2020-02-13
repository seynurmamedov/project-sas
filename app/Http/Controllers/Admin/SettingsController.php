<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function getSettings(){
        $settings = Settings::where('id',1)->first();
        return view('admin.settings',['settings'=>$settings]);
    }

    public function postSettings(Request $request){
        $request->request->remove('_token');
        $file = $request->file('logo');
        Settings::where(['id'=>1])->update([
            'title'=>$request->get('title'),
            'keywords'=>$request->get('keyword'),
            'phone1'=>$request->get('phone1'),
            'phone2'=>$request->get('phone2'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'facebook'=>$request->get('facebook'),
            'instagram'=>$request->get('instagram')
        ]);
   		 if ($file) {
   		 	$destinationPath = 'img/uploads';
		    $newurl =str_random(16).'.'.$file->getClientOriginalExtension();
		    $file->move($destinationPath,$newurl);
            Settings::where(['id'=>1])->update([
                'logo'=>$newurl
            ]);
	    
   		 }

        return $this->getSettings();
    }
}
