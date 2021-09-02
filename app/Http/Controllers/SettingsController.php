<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ModelTest\Project;

class SettingsController extends Controller
{
    public function getSettings() {
        return view('settings');
    }
}