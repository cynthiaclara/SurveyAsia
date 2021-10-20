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

Route::view('/admin/dashboard', 'home');
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
Route::middleware('auth')->group(function () {
    Route::view('/researcher', 'researcher.dashboard');
    Route::view('/researcher/dashboard', 'researcher.dashboard');
    Route::view('/researcher/pricing', 'researcher.pricing');
    Route::view('/researcher/payment', 'researcher.payment');
    Route::view('/researcher/create-survey', 'researcher.create-survey');
    Route::view('/researcher/customize-diagram', 'researcher.customize-diagram');
    Route::view('/researcher/collect-respondent', 'researcher.collect-respondent');
    Route::view('/researcher/status-survey', 'researcher.status-survey');
    Route::view('/researcher/analytics-result', 'researcher.analytics-result');
});

// Respondent Routes
Route::middleware('auth')->group(function () {
    Route::view('/respondent', 'respondent.dashboard');
    Route::view('/respondent/dashboard', 'respondent.dashboard');
});

/* Survey routes */
Route::middleware('auth')->group(function () {
    Route::view('/survey/pre-survey', 'survey.pre-survey');
    Route::view('/survey/history', 'survey.history');
    Route::view('/survey/history/change-point', 'survey.change-point');
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
Route::middleware(['is_admin'])->group(function () {
    Route::get('admin', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin_dashboard');

    /* show admin dashboard */


    /* show all users */
    Route::get('admin/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users.index');

    /* show users details */
    Route::get('admin/users/{user}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_users.show');

    /* show create user form */
    Route::get('admin/users/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_users.create');
    /* attempt store user */
    Route::post('admin/users', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_users.store');

    /* show update user form */
    Route::get('admin/users/edit/{user}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_users.edit');
    /* attempt update user */
    Route::put(
        'admin/users',
        [\App\Http\Controllers\Admin\UserController::class, 'update']
    )->name('admin_users.update');

    /* attempt delete user */
    Route::delete('admin/users/{user}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_users.destroy');
    Route::resource('admin/news', NewsController::class);
});


/* admin auth routes */
// login
Route::view('/admin-login', 'admin.auth.login-admin')->name('view-admin-login');
Route::post('/admin-login', [\App\Http\Controllers\Admin\AuthController::class, 'attemptLogin'])->name('attempt-admin-login');

// register
Route::view('/admin-register', 'admin.auth.register')->name('view-admin-register');
Route::post('/admin-register', [\App\Http\Controllers\Admin\AuthController::class, 'attemptRegister'])->name('attempt-admin-register');


Route::get('/admin/list-user', function () {
    return view('admin.auth.list-user');
})->name('admin-users');
