<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\NewsController as News;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\SocialShareController;
use App\Http\Controllers\UsersProfileController;
use App\Http\Controllers\SurveyController;


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
// Auth::routes(['verify' => true]);
Auth::routes();

//for testing purpose

Route::get('/playground', [App\Http\Controllers\HomeController::class, 'playground'])->middleware('auth');


Route::view('/', 'home')->middleware('redirect')->name('home');

/* non-middleware routes */
Route::view('/about', 'about');
Route::get('/news', [News::class, 'index'])->name('news');
Route::get('/news/detail-news', [News::class, 'show'])->name('detail-news');
Route::view('/contact', 'contact');
Route::view('/faq', 'faq');
Route::view('/pricing', 'pricing');
Route::view('/payment', 'payment');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('user-profile');
});

/* Screening routes */
Route::middleware(['guest'])->group(function () {
    /* screening routes */
    Route::view('/pilih', 'screening.pilih')->name('pilih');
    Route::view('/validate', 'screening.upload-ktp')->name('ktp-validate');
    Route::view('/validate/personal', 'screening.personal-data')->name('personal-data-validate');
    Route::view('/verifikasi', 'screening.verifikasi')->name('verifikasi');
    Route::view('/device', 'screening.device')->name('device');
    Route::view('/kode', 'screening.kode')->name('kode');
    Route::view('/ios', 'screening.ios')->name('ios');

});

/* Researcher routes */
Route::middleware(['auth', 'role:researcher', 'verified'])->group(function () {
    Route::prefix('researcher')->name('researcher.')->group(function () {
        Route::redirect('/', '/researcher/surveys', 301);
        Route::redirect('/dashboard', '/researcher/surveys', 301);
        Route::view('dashboard', 'researcher.dashboard');
        Route::view('pricing', 'researcher.pricing');
        Route::view('payment', 'researcher.payment');
        Route::view('tutorial', 'researcher.tutorial');
        Route::view('create-survey', 'researcher.create-survey');
        Route::view('customize-diagram', 'researcher.customize-diagram');
        Route::view('collect-respondent', 'researcher.collect-respondent');
        Route::view('status-survey', 'researcher.status-survey');
        Route::view('analytics-result', 'researcher.analytics-result');

        //survey resource
        Route::resource('surveys', SurveyController::class);
    });
});

// Respondent Routes
Route::middleware(['auth', 'role:respondent'])->group(function () {
    Route::prefix('respondent')->name('respondent.')->group(function () {
        Route::redirect('/', '/respondent/dashboard', 301);
        Route::view('/dashboard', 'respondent.dashboard');
    });
});

//editprofile
// Route::group(array('prefix'=>'user'), function(){
//     Route::get('editprofile/{id}', 'UsersProfileController@edit');
//     Route::post('updateprofile/{id}','UsersProfileController@update')->name('updateprofile');
//     Route::post('profile/simpanphoto','UsersProfileController@simpanphoto')->name('simpanphoto');
// });
Route::get('/pengaturan', 'App\Http\Controllers\UsersProfileController@pengaturan')->name('pengaturan');
Route::put('/pengaturan','App\Http\Controllers\UsersProfileController@updateProfil')->name('pengaturan.update');

Route::put('/ubah-password','App\Http\Controllers\UsersProfileController@changePassword')->name('pengaturan.ubah-password');


//social share
// Route::get('/detail-news', [SocialShareController::class, 'index']);

/* admin routes */
Route::middleware('is_admin')->group(function () {
    /* admin prefix, ex : admin/users , admin/news */
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::redirect('/', 'admin/dashboard', 301);

        /* show admin dashboard */
        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

        /* users resource */
        Route::resource('users', UserController::class);
        // user custom notify
        Route::get('users/{user}/notify', [UserController::class, 'notify'])->name('users.notify');
        Route::get('users/{user}/profile', [UserController::class, 'profile'])->name('users.profile');

        /* news resource */
        Route::resource('news', NewsController::class);
    });
});


/* admin auth routes */
// login
Route::view('/admin-login', 'admin.auth.login-admin')->name('view-admin-login');
Route::post('/admin-login', [\App\Http\Controllers\Admin\AuthController::class, 'attemptLogin'])->name('attempt-admin-login')->middleware('throttle:admin-login');

/* email verification routes, DO NOT MODIFY */
// email verification link notice view
Route::get('email/verify/{id}', [VerificationController::class, 'send'])->name('verification.send');

// email verification proccess
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');

// resend email verification proccess
Route::post('email/verification-resend', [VerificationController::class, 'resend'])->middleware(['throttle:2,10'])->name('verification.resend');

// resend email verification proccess
Route::get('email/verification-notification', [VerificationController::class, 'show'])->name('verification.notice');
