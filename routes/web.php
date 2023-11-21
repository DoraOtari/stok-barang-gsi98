<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::view('/dashboard', 'page.dashboard')->middleware('auth');

Route::resource('user', UserController::class);

Route::controller(LoginController::class)->group(function(){
    Route::post('/otentikasi','otentikasi');
    Route::post('/logout','logout');
});