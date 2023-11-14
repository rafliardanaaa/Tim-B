<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisuserController;
use App\Http\Controllers\LoguserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;


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

Route::get('/landing', function () {
    return view('welcome');
});

Route::get('/sign-in', [LoguserController::class, 'index'])->name('sign-in');

Route::post('/sign-in', [LoguserController::class, 'authanticate']);

Route::get('/user/logout', [LoguserController::class, 'logout'])->name('user.logout');

Route::get('/sign-up', [RegisuserController::class, 'index'])->name('sign-up');

Route::post('/sign-up', [RegisuserController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Rute untuk Pegawai
Route::resource('pegawai', 'PegawaiController');

// Rute untuk User
Route::resource('user', 'UserController');

Route::get('/pegawai', function () {
    return view('dashboard-pegawai');
});

Route::get('data-pegawai', function () {
    return view('data.pegawai');
});
Route::get('data-user', function () {
    return view('data.user');
});

