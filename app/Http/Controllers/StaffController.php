<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;
use Illuminate\Database\Exception;
use App\Models\User;
use Auth;
use Hash;
use Session;
use Log;

class StaffController extends Controller
{
    public function getStaff(Request $request) {
        $users = User::where('role', '!=', 'admin');
        if($request->has('search')) {
            $users = $users
                ->where('firstname', 'like', '%'.$request->get('search').'%')
                ->orWhere('lastname', 'like', '%'.$request->get('search').'%')
                ->where('role', '!=', 'admin');
        }
        $users = $users->get();
        return view('staff')
            ->with("error", Session::get("error"))
            ->with('users', $users)
            ->with('search', $request->get('search'));
    }

    public function addUser(Request $request)
    {
        if ($request->password != $request->confirmpassword){
            return redirect('/staff')->with('error', 'Invalid input, please try again!');
        }
        else {
            try {
                $user = new User;
                $user->firstname = $request->firstname;
                $user->lastname = $request->lastname;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->workplace = Auth::user()->workplace;
                $user->jobtitle = $request->jobtitle;
                $user->role = 'staff';
                $user->save();
                return redirect('/staff');

            } catch(\Exception $e) {
                Log::error($e->getMessage());
                return redirect('/staff')->with('error', 'Invalid input, please try again!');
            }
        }
    }

    public function editUser(Request $request)
    {
        try {
            $user = User::where("id", $request->id)->first();
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->jobtitle = $request->jobtitle;
            $user->update();
            return redirect('/staff');
        }
        catch (\Exception $e){
            Log::error($e->getMessage());
            return redirect('/staff')->with('error', 'Invalid input, please try again!');
        }
    }

    public function removeUser(Request $request)
    {
        $user = User::where("id", $request->id)->delete();
        return redirect('/staff');
    }
}
