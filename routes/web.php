<?php

use App\Http\Controllers\Admin\NewsController;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/dashboard', 'home');
Route::get('/playground', [App\Http\Controllers\HomeController::class, 'playground'])->middleware('auth');



Route::get('/research/login', [AuthController::class, 'loginForm']);

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
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile']);
});


/* admin auth routes */
// login
Route::view('/admin-login', 'admin.auth.login')->name('view-admin-login');
Route::post('/admin-login', [\App\Http\Controllers\Admin\AuthController::class, 'attemptLogin'])->name('attempt-admin-login');

// register
Route::view('/admin-register', 'admin.auth.register')->name('view-admin-register');
Route::post('/admin-register', [\App\Http\Controllers\Admin\AuthController::class, 'attemptRegister'])->name('attempt-admin-register');


// news
Route::resource('news', NewsController::class);
// Route::get('/news', [NewsController::class, 'index'])->name('news');
// Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
// Route::post('/news', [NewsController::class, 'store'])->name('news.store');
