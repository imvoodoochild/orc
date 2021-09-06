<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;
use Auth;

class LoginController extends Controller
{
    public function getLogin() {
        return view('login');
    }

    public function doLogin(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            return redirect('/login');
        }
    }

    public function doLogout() {
        Auth::logout();
        return redirect('/login');
    }
}
