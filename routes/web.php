<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Registercontroller;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/researcher/dashboard', function () {
//     return view('researcher.dashboard');
// });
Route::get('/researcher/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/researcher/pricing', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/researcher/payment', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('/researcher/pricing', function () {
//     return view('researcher.pricing');
// });

// Route::get('/researcher/payment', function () {
//     return view('researcher.payment');
// });
