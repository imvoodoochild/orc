<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\ModelTest\Project;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Exception;
use Session;
use Log;

class RegisterController extends Controller
{
    public function getRegister() {
        return view('register')->with("error", Session::get("error"));
    }

    public function doRegister(Request $request)
    {
        if ($request->password != $request->confirmpassword){
            return redirect('/register')->with("error", "Invalid input, please try again!");
        }
        else{
            try {
                $user = new User;
                $user->firstname = $request->firstname;
                $user->lastname = $request->lastname;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->workplace = $request->workplace;
                $user->jobtitle = $request->jobtitle;
                $user->role = 'admin';
                $user->save();

                return redirect('/login');
            }
            catch(\Exception $e) {
                Log::error($e->getMessage());
                return redirect('/register')->with('error', 'Invalid input, please try again!');
            }
        }
    }
}

