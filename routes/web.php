<?php

// Programmer name: Ms. Mariyam Malika Asim, TP056480, BSc. (Hons) in Computer Science, Asia Pacific University (APU), Technology Park Malaysia
// Program name: web.php
// Description: To provide the routes of all pages in website.
// First written on: 28/07/2021
// Edited on: 13/10/2021

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     return redirect('/home');
});

Route::get('/home', [HomeController::class, "getHome"]);

Route::get('/login', [LoginController::class, "getLogin"])->name('login');
Route::post('/login', [LoginController::class, "doLogin"]);
Route::get('/logout', [LoginController::class, "doLogout"]);

Route::get('/register', [RegisterController::class, "getRegister"])->name('register');
Route::post('/register', [RegisterController::class, "doRegister"]);

Route::middleware(['auth'])->group(function () {

	Route::get('/dashboard', [DashboardController::class, "getDashboard"])->name('dashboard');
	Route::post('/dashboard', [DashboardController::class, "addProject"]);
	Route::get('/project/{id}', [DashboardController::class, "getProject"]);
	Route::post('/project/{id}', [DashboardController::class, "editProject"]);
	Route::delete('/project/{id}', [DashboardController::class, "removeProject"]);
	Route::get('/project/{id}/start', [DashboardController::class, "startProject"]);
    Route::get('/project/{id}/stop', [DashboardController::class, "stopProject"]);

	Route::post('/profile/password', [ProfileController::class, "changePassword"]);
	Route::get('/profile/{id}', [ProfileController::class, "getUser"]);
	Route::post('/profile/{id}', [ProfileController::class, "editProfile"]);
	Route::get('/profile', [ProfileController::class, "getProfile"])->name('profile');

	Route::get('/staff', [StaffController::class, "getStaff"])->name('staff');
	Route::post('/staff', [StaffController::class, "addUser"]);
	Route::post('/staff/{id}', [StaffController::class, "editUser"]);
	Route::delete('/staff/{id}', [StaffController::class, "removeUser"]);

});
