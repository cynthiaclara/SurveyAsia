<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LinkedinController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Registercontroller;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
// Route::get('auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');

Route::get('/sign-in', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/sign-in', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//  login dengan google, facebook dan linkedin
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

// Facebook Login
Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback'])->name('facebook.callback');

// Linkedin Login
Route::get('auth/linkedin', [LinkedinController::class, 'redirectToLinkedin'])->name('linkedin.login');
Route::get('auth/linkedin/callback', [LinkedinController::class, 'handleLinkedinCallback'])->name('linkedin.callback');

Route::get('/sign-up', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/sign-up', [RegisterController::class, 'store']);

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

// Route::post('/reset-password/{email}/{code}', [ResetPasswordController::class, 'resetPassword'])
//     ->middleware('guest')->name('password.update');

// Route::post('/reset-password', 'ResetPasswordController@resetPassword');

// Route::post('/reset-password', 'ResetPasswordController@resetPassword');
Route::post('/reset-password', 'ResetPasswordController@resetPassword');



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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pilih', function () {
    return view('screening.pilih');
});

Route::get('/tempatkerja', function () {
    return view('screening.tempatkerja');
});

Route::get('/posisikerja', function () {
    return view('screening.posisikerja');
});


Route::get('/researcher/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/researcher/pricing', [DashboardController::class, 'pricing'])->middleware('auth');
Route::get('/researcher/payment', [DashboardController::class, 'payment'])->middleware('auth');
Route::get('/researcher/create-survey', [DashboardController::class, 'createSurvey'])->middleware('auth');

Route::get('/respondent/dashboard', function () {
    return view('respondent.dashboard');
});

Route::get('/survey/pre-survey', function () {
    return view('survey.pre-survey');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::get('/reset-password', function () {
//     return view('auth.passwords.reset');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/screeningktp', function () {
    return view('screening.ktp');
});
