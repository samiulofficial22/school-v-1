<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\User;
class UserController extends Controller
{
    public function change_password(){
        $data['header_title'] = "Change Password";
        return view('profile.change_password');
    }

    public function update_password(Request $request){

        $user = User::getSingle(Auth::user()->id);
        if(Hash::Check($request->old_password,$user->password)){
            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect()->back()->with('success',"Password Change Successfully");
        }
        else{
            return redirect()->back()->with('error',"Old Password is not currect please try again");

        }
        // dd($user->password);
    }
}
