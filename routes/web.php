<?php

use App\Http\Controllers\Researcher\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/dashboard', 'home');

Route::view('/admin-login', 'auth.admin.login')->name('view-admin-login');
Route::post('/admin-login', [\App\Http\Controllers\Admin\AuthController::class, 'attemptLogin'])->name('attempt-admin-login');

Route::get('/research/login', [AuthController::class, 'loginForm']);

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('users', [\App\Http\Controllers\Admin\UserController::class, 'index']);
});
