<?php

use App\Http\Controllers\AdminControl;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::controller(Admincontrol::class)->group(function () {
        Route::get('/login','index')->name('login');
        Route::post('/login-post', 'login')->name('login-post');
    });
});

Route::controller(AdminControl::class)->group(function (){
    Route::post('/logout', 'logout')->name('logout');       
});

Route::middleware('auth')->group(function () {
    Route::controller(BerandaController::class)->group(function (){
            Route::get('/','index')->name('beranda.index');
    });
});



