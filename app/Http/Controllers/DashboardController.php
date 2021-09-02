<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;

class DashboardController extends Controller
{
    public function getDashboard() {
        return view('dashboard');
    }
}
