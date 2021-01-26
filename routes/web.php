<?php

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

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\LoginController;

Route::name('site.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::name('auth.')->group(function () {
    Route::get('/auth/login', [LoginController::class, 'index'])->name('login');
});
