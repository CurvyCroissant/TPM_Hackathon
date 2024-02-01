<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RegistrationBinusianController;
use App\Http\Controllers\RegistrationNonBinusianController;
use App\Http\Controllers\AdminPanelController;

Route::get('/', [HomeController::class, 'home']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/registration', [RegistrationController::class, 'registration']);

Route::get('/registration-binusian', [RegistrationBinusianController::class, 'registrationBinusian']);

Route::get('/registration-non-binusian', [RegistrationNonBinusianController::class, 'registrationNonBinusian']);

Route::get('/admin-panel', [AdminPanelController::class, 'adminPanel']);
