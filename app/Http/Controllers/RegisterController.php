<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\ModelTest\Project;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function getRegister() {
        return view('register');
    }

    public function doRegister(Request $request)
    {
        if ($request->password != $request->confirmpassword){
            return redirect('/register');
        }
        
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

}
