<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;

class LoginController extends Controller
{
    public function getLogin() {
        return view('login');
    }
}
