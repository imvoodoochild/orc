<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use Session;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function getProfile() {
        $user = User::where("id", Auth::user()->id)->first();

        if (Session::has('error')) {
            return view('profile')->with([
                "user" => $user,
                "error" => Session::get('error')
            ]);
        } elseif (Session::has('success')) {
            return view('profile')->with([
                "user" => $user,
                "success" => Session::get('success')
            ]);
        } else {
            return view('profile')->with("user", $user);
        }
    }

    public function getUser(Request $request)
    {
        $user = User::where("id", Auth::user()->id)->first();

        return view('profile')->with("user", $user);
    }

    public function editProfile(Request $request)
    {
        $user = User::where("id", $request->id)->first();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->jobtitle = $request->jobtitle;
        $user->update();

        return redirect('/profile');
    }

    public function changePassword(Request $request)
    {
        $user = User::where("id", Auth::user()->id)->first();
        if (!Hash::check($request->currentpassword, $user->password) || $request->newpassword != $request->confirmpassword){
            return Redirect::back()->with('error', 'Invalid input, please try again!');
        }

        $user->password = Hash::make($request->newpassword);
        $user->update();

        return redirect('/profile')->with('success', "Password successfully updated!");
    }
}
