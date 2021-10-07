<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;
use Auth;
use Session;

class LoginController extends Controller
{
    public function getLogin() {
        return view('login')->with("error", Session::get("error"));
    }

    public function doLogin(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with("error", "Invalid email or password!");
        }
    }

    public function doLogout() {
        Auth::logout();
        return redirect('/login');
    }
}

