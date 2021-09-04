<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;

class AccountController extends Controller
{
    public function getAccount() {
        return view('account');
    }
}