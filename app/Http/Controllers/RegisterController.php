<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;

class RegisterController extends Controller
{
    public function getRegister() {
        return view('register');
    }
}
