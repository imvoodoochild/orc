<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UsersController;
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

// Route::get('/', function () {
//     return view('welcome', ['title' => 'Orc']);
// });

Route::get('/', [HomeController::class, "getHome"]);

Route::get('/login', [LoginController::class, "getLogin"])->name('login');
Route::post('/login', [LoginController::class, "doLogin"]);

Route::get('/logout', [LoginController::class, "doLogout"]);

Route::get('/register', [RegisterController::class, "getRegister"])->name('register');
Route::post('/register', [RegisterController::class, "doRegister"]);

Route::middleware(['auth'])->group(function () {
	Route::get('/doc', [DashboardController::class, "getDoc"]);

	Route::get('/dashboard', [DashboardController::class, "getDashboard"])->name('dashboard');
	Route::post('/dashboard', [DashboardController::class, "addProject"]);

	Route::get('/project/{id}', [DashboardController::class, "getProject"]);
	Route::post('/project/{id}', [DashboardController::class, "editProject"]);
	Route::delete('/project/{id}', [DashboardController::class, "removeProject"]);

	Route::get('/account/{id}', [AccountController::class, "getUser"]);
	Route::post('/account/{id}', [AccountController::class, "editAccount"]);

	Route::get('/account', [AccountController::class, "getAccount"])->name('account');
	Route::post('/account/password', [AccountController::class, "changePassword"]);

	Route::get('/users', [UsersController::class, "getUsers"])->name('users');
	Route::post('/user', [UsersController::class, "addUser"]);
	Route::post('/user/{id}', [UsersController::class, "editUser"]);
	Route::delete('/user/{id}', [UsersController::class, "removeUser"]);

});
