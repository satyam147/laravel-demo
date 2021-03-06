<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/post', [HomeController::class, 'demo'])->name('demo.post');
Route::get('/verify/{key?}', [HomeController::class, 'par'])->name('par');
Route::group(['prefix' => 'Auth'], function () {
    Route::get('/Registration', [UserController::class, 'registration'])->name('Auth.Registration');
    Route::post('/Register', [UserController::class, 'register'])->name('Auth.Register');
});



