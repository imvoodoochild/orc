<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;

class UsersController extends Controller
{
    public function getUsers() {
        return view('users');
    }
}
