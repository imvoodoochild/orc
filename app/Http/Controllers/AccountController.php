<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class AccountController extends Controller
{
    public function getAccount() {
        $user = User::where("id", Auth::user()->id)->first();
        return view('account')->with("user", $user);
    }

    public function getUser(Request $request)
    {
        $user = User::where("id", Auth::user()->id)->first();
        
        return view('account')->with("user", $user);
    }

    public function editUser(Request $request)
    {
        $user = User::where("id", $request->id)->first();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->jobtitle = $request->jobtitle;
        $user->update();

        return redirect('/account');
    }

    public function changePassword(Request $request)
    {
        $user = User::where("id", Auth::user()->id)->first();
        if ($user->password != Hash::make($request->oldpassword) || $request->newpassword != $request->confirmpassword){
            return redirect('/account');
        }
        
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/account');
    }
}