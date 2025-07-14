<?php

use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::middleware('guest')->group(function () {
    Route::controller(RegistrationController::class)->group(function () {
        Route::get('/registration', 'create')->name('registration.create');
    });

    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'create')->name('login.create');
    });
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index');
});
