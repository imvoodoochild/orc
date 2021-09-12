<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;
use App\Models\User;
use Auth;
use Hash;

class UsersController extends Controller
{
    public function getUsers() {
        return view('users');
    }

    public function addUser(Request $request)
    {
        if ($request->password != $request->confirmpassword){
            return redirect('/users');
        }
        
        $user = new User;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->workplace = Auth::user()->workplace;
        $user->jobtitle = $request->jobtitle;
        $user->role = 'staff';
        $user->save();

        return redirect('/users');
    }
    
}
