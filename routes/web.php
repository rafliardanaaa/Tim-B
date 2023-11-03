<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisuserController;
use App\Http\Controllers\LoguserController;
use App\Http\Controllers\LoginController;


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
    return view('landing');
});

Route::get('/sign-in', [LoguserController::class, 'index'])->name('sign-in');

Route::post('/sign-in', [LoguserController::class, 'authanticate']);

Route::get('/user/logout', [LoguserController::class, 'logout'])->name('user.logout');

Route::get('/sign-up', [RegisuserController::class, 'index'])->name('sign-up');

Route::post('/sign-up', [RegisuserController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
});
