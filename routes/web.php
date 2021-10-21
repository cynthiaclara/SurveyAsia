<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\LinkedinController;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\NewsController as News;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\Researcher\AuthController;
use App\Http\Controllers\Auth\ResetPasswordController;
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

Auth::routes();

//for testing purpose
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/playground', [App\Http\Controllers\HomeController::class, 'playground'])->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* non-middleware routes */
Route::view('/', 'home');
Route::view('/about', 'about');
Route::get('/news', [News::class, 'index'])->name('news');
Route::get('/news/detail-news', [News::class, 'show'])->name('detail-news');
Route::view('/contact', 'contact');
Route::view('/pricing', 'pricing');
Route::view('/payment', 'payment');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('user-profile');
});

/* Screening routes */
Route::middleware(['auth'])->group(function () {
    /* screening routes */
    Route::view('/pilih', 'screening.pilih')->name('pilih');
    Route::view('/validate', 'screening.upload-ktp')->name('ktp-validate');
    Route::view('/validate/personal', 'screening.personal-data')->name('personal-data-validate');
});

/* Researcher routes */
Route::middleware(['auth', 'role:researcher'])->group(function () {
    Route::prefix('researcher')->name('researcher.')->group(function () {
        Route::redirect('/', '/researcher/dashboard', 301);
        Route::view('dashboard', 'researcher.dashboard');
        Route::view('pricing', 'researcher.pricing');
        Route::view('payment', 'researcher.payment');
        Route::view('create-survey', 'researcher.create-survey');
        Route::view('customize-diagram', 'researcher.customize-diagram');
        Route::view('collect-respondent', 'researcher.collect-respondent');
        Route::view('status-survey', 'researcher.status-survey');
        Route::view('analytics-result', 'researcher.analytics-result');
    });
});

// Respondent Routes
Route::middleware('auth')->group(function () {
    Route::view('/respondent', 'respondent.dashboard');
    Route::view('/respondent/dashboard', 'respondent.dashboard');
});

//forgot password
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

// Route::post('/reset-password/{token}', [ResetPasswordController::class, 'resetPassword'])
//     ->middleware('guest')->name('password.update');

Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword']);

// Route::view('forgot_password', 'auth.reset')->name('password.reset');
// Route::post('password/email', [ForgotPasswordController::class, 'forgot']);
// Route::post('password/reset', [ForgotPasswordController::class, 'reset']);

/* admin routes */
Route::middleware(['auth', 'is_admin'])->group(function () {
    /* admin prefix, ex : admin/users , admin/users */
    Route::prefix('admin')->name('admin.')->group(function () {
        /* show admin dashboard */
        Route::get('admin', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin_dashboard');

        /* users resource */
        Route::resource('users', UserController::class);
        Route::resource('news', NewsController::class);
    });
});


/* admin auth routes */
// login
Route::view('/admin-login', 'admin.auth.login-admin')->name('view-admin-login');
Route::post('/admin-login', [\App\Http\Controllers\Admin\AuthController::class, 'attemptLogin'])->name('attempt-admin-login');

// register
Route::view('/admin-register', 'admin.auth.register')->name('view-admin-register');
Route::post('/admin-register', [\App\Http\Controllers\Admin\AuthController::class, 'attemptRegister'])->name('attempt-admin-register');
