<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::controller(LoginController::class)->group(function(){
    Route::post('/otentikasi','otentikasi');
    Route::post('/logout','logout');
});

Route::middleware(['auth'])->group(function(){
    Route::view('/dashboard', 'page.dashboard');
    Route::resource('/user', UserController::class);
    Route::resource('/stok', StokBarangController::class);
});