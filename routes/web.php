<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Registercontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});


Route::get('/sign-in', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/sign-in', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



// Route::get('/sign-in', function () {
//     return view('auth.login');
// });

Route::get('/sign-up', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/sign-up', [RegisterController::class, 'store']);

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/detail-blog', function () {
    return view('detail-blog');
});

Route::get('/news', function () {
    return view('news');
});
