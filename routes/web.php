<?php

use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Vet\Auth\RegistrationController as VetRegistrationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\ProfileController as UserProfileController;
use App\Http\Controllers\Vet\ProfileController as VetProfileController;
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

/**
 * User (Pet Parent) Profile Page
 */
Route::controller(UserProfileController::class)->group(function () {
    Route::get('/profile', 'index');
    Route::get('/profile/edit', 'edit')->name('profile.edit');
});


Route::middleware('guest')->group(function () {
    Route::controller(VetRegistrationController::class)->group(function () {
        Route::get('/vet-registration', 'create')->name('vet-registration.create');
    });

    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'create')->name('login.create');
    });
});

/**
 * Vet Profile Page
 */
Route::controller(VetProfileController::class)->group(function () {
    Route::get('/profile', 'index');
});
