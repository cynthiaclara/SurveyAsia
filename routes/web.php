<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Researcher\AuthController;

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
    return view('home');
});

Route::get('/sign-in', function () {
    return view('auth.login');
})->name('login');

Route::get('/sign-up', function () {
    return view('auth.register');
})->name('register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/dashboard', 'home');
Route::get('/playground', [App\Http\Controllers\HomeController::class, 'playground'])->middleware('auth');

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/detail-blog', [BlogController::class, 'show'])->name('detail-blog');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/news', function () {
    return view('news');
});

// Pre Screening
Route::get('/choose-role', function () {
    return view('screening/choose-role');
});

Route::get('/upload-ktp', function () {
    return view('screening/upload-ktp');
});

Route::get('/personal-data', function () {
    return view('screening/personal-data');
});

Route::get('/researcher/login', [AuthController::class, 'loginForm']);

Route::middleware(['is_admin'])->group(function () {

    /* show admin dashboard */
    Route::get('admin', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin_dashboard');

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
});

Route::middleware('auth')->group(function () {
    // Researcher
    Route::get('/researcher/dashboard', function () {
        return view('researcher/dashboard');
    });
    Route::get('/researcher/pricing', function () {
        return view('researcher/pricing');
    });
    Route::get('/researcher/create-survey', function () {
        return view('researcher/create-survey');
    });
    Route::get('/researcher/customize-diagram', function () {
        return view('researcher/customize-diagram');
    });
    Route::get('/researcher/collect-respondent', function () {
        return view('researcher/collect-respondent');
    });
    Route::get('/researcher/status-survey', function () {
        return view('researcher/status-survey');
    });
    Route::get('/researcher/analytics-result', function () {
        return view('researcher/analytics-result');
    });

    // Respondent
    Route::get('/respondent/dashboard', function () {
        return view('respondent/dashboard');
    });

    // Survey
    Route::get('/survey/pre-survey', function () {
        return view('survey/pre-survey');
    });
    Route::get('/survey/history', function () {
        return view('survey/history');
    });
    Route::get('/survey/history/change-point', function () {
        return view('survey/change-point');
    });

    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile']);
});


/* admin auth routes */
// login
Route::view('/admin-login', 'admin.auth.login')->name('view-admin-login');
Route::post('/admin-login', [\App\Http\Controllers\Admin\AuthController::class, 'attemptLogin'])->name('attempt-admin-login');

// register
Route::view('/admin-register', 'admin.auth.register')->name('view-admin-register');
Route::post('/admin-register', [\App\Http\Controllers\Admin\AuthController::class, 'attemptRegister'])->name('attempt-admin-register');
