<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;

class DashboardController extends Controller
{
    public function getDoc() {
        $projectArr = [
            new Project("First project", "active"),
            new Project("test project", "active"),
            new Project("dummy project", "active"),
            new Project("hello world", "suspended"),
        ];

        return view('welcome', ['projects' => $projectArr, 'title' => 'Orc']);
    }

    public function getDashboard() {
        return view('dashboard');
    }
}