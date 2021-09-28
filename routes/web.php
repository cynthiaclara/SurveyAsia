<?php

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

Route::get('/sign-in', function () {
    return view('auth.login');
});

// Route::get('/sign-up', function () {
//     return view('auth.register');
// });

Route::get('/sign-up', [registercontroller::class, 'create']);
Route::Post('/sign-up', [registercontroller::class, 'store']);

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});
