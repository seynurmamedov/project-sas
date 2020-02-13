<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Auth;
class UsersListController extends Controller
{
    public function getUsersList(){
        return view('admin.users-list',['results'=>User::all(),'roles'=>Role::all()]);
    }

    public function postUsersList(Request $request){
        if($request->id !=11 and Auth::user()->id != $request->id){
            if($request->roles){
            $user=User::find($request->id)->roles()->sync($request->roles);
            }
            else{
                User::destroy($request->id);
            }
        }
        return redirect()->route('getUsersList');
    }

}
