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

Route::view('/diagnostico', 'pages.diagnostico');

Route::name('auth.')->group(function () {
    Route::get('/auth/signin', [LoginController::class, 'signIn'])->name('signin');
    Route::get('/auth/signup', [LoginController::class, 'signUp'])->name('signup');
    Route::get('/auth/forgotten-password', [LoginController::class, 'resetPassword'])->name('forgotten-password');
   
});
