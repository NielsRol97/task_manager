<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

// Dashboard Route
Route::name('dashboard.')
    ->prefix('/')
    ->controller(DashboardController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });

// Register routes
Route::get('registreer', [RegisterController::class, 'showRegistrationForm'])->name('view.register');
Route::post('registreer/auth', [RegisterController::class, 'register'])->name('auth.register');

// Login routes
Route::get('inloggen', [LoginController::class, 'showLoginForm'])->name('view.login');
Route::post('inloggen/auth', [LoginController::class, 'login'])->name('auth.login');
Route::post('uitloggen', [LoginController::class, 'logout'])->name('logout');
