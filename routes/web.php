<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

Route::name('dashboard.')
    ->prefix('/')
    ->controller(DashboardController::class)
    ->group(function() {
        Route::get('/', 'index')->name('index');
    });

Route::get('registreer', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('registreer', [RegisterController::class, 'register']);

Route::get('inloggen', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('inloggen', [LoginController::class, 'login']);
Route::post('uitloggen', [LoginController::class, 'logout'])->name('logout');
