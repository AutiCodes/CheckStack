<?php

use Illuminate\Support\Facades\Route;
use Modules\Users\Http\Controllers\UsersController;
use Modules\Users\Http\Controllers\AutenticationController;

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

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', UsersController::class)->names('users');
});

Route::group([], function () {
    Route::get('login', [AutenticationController::class, 'login'])->name('login');
    Route::post('login-post', [AutenticationController::class, 'loginPost']);
    Route::get('logout', [AutenticationController::class, 'logout'])->name('logout');
});