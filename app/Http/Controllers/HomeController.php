<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;

class HomeController extends Controller
{
    public function getHome() {
        return view('home');
    }
}
