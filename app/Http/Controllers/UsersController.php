<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;
use App\Models\User;
use Auth;
use Hash;

class UsersController extends Controller
{
    public function getUsers(Request $request) {
        $users = User::where('role', '!=', 'admin');
        if($request->has('search')) {
            $users = $users
                ->where('firstname', 'like', '%'.$request->get('search').'%')
                ->orWhere('lastname', 'like', '%'.$request->get('search').'%')
                ->where('role', '!=', 'admin');
        }
        $users = $users->get();
        return view('users')
            ->with('users', $users)
            ->with('search', $request->get('search'));
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

    public function editUser(Request $request)
    {
        $user = User::where("id", $request->id)->first();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->jobtitle = $request->jobtitle;
        $user->update();
        return redirect('/users');
    }
    
    public function removeUser(Request $request)
    {
        $user = User::where("id", $request->id)->delete();
        return redirect('/users');
    }
}
