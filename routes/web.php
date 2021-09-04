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

Route::get('/doc', [DashboardController::class, "getDoc"]);
Route::get('/', [HomeController::class, "getHome"]);
Route::get('/login', [LoginController::class, "getLogin"]);
Route::get('/register', [RegisterController::class, "getRegister"]);
Route::get('/dashboard', [DashboardController::class, "getDashboard"]);
Route::get('/account', [AccountController::class, "getAccount"]);
Route::get('/users', [UsersController::class, "getUsers"]);
