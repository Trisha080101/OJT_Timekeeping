<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route:: get ('/login', [AuthController::class, 'login'] )->middleware('alrdyLoggedIn');
Route:: get ('/registration', [AuthController::class, 'registration'] );
Route:: post ('/register-user', [AuthController::class, 'registerUser'] )->name('register-user');
Route:: post ('/login-user', [AuthController::class, 'loginUser'] )->name('login-user');
Route:: get ('/dashboard', [AuthController::class, 'dashboard'] )->middleware('isLoggedIn');
Route:: get ('/logout', [AuthController::class, 'logout'] );
Route:: get ('/userdash', [AuthController::class, 'userdash'] )->middleware('isLoggedIn');
Route:: get ('/admindash', [AuthController::class, 'admindash'] )->middleware('isLoggedIn');