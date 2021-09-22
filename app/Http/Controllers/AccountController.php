<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use Session;
use Illuminate\Support\Facades\Redirect;

class AccountController extends Controller
{
    public function getAccount() {
        $user = User::where("id", Auth::user()->id)->first();

        if (Session::has('error')) {
            return view('account')->with([
                "user" => $user,
                "error" => Session::get('error')
            ]);
        } elseif (Session::has('success')) {
            return view('account')->with([
                "user" => $user,
                "success" => Session::get('success')
            ]);
        } else {
            return view('account')->with("user", $user);
        }
    }

    public function getUser(Request $request)
    {
        $user = User::where("id", Auth::user()->id)->first();

        return view('account')->with("user", $user);
    }

    public function editAccount(Request $request)
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
        if (!Hash::check($request->oldpassword, $user->password) || $request->newpassword != $request->confirmpassword){
            return Redirect::back()->with('error', 'Either the password does not match, or the new password and confirm password does not match');
        }

        $user->password = Hash::make($request->newpassword);
        $user->update();

        return redirect('/account')->with('success', "The user password updated successfully");
    }
}
