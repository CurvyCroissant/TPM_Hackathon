<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RegistrationBinusianController;
use App\Http\Controllers\RegistrationNonBinusianController;
use App\Http\Controllers\AdminPanelController;

// HomeController
Route::get('/', [HomeController::class, 'home'])->name('home');


// DashboardController
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::post('/create-members', [DashboardController::class, 'store'])->name('dashboard.store');


// LoginController
Route::get('/login', [LoginController::class, 'login'])->name('login');


// RegistrationController
Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::post('/create-group', [RegistrationController::class, 'store'])->name('registration.store');


// RegistrationBinusianController
Route::get('/registration-binusian', [RegistrationBinusianController::class, 'registrationBinusian'])->name('registration-binusian');
Route::post('/create-leader-binusian', [RegistrationBinusianController::class, 'store']);


// RegistrationNonBinusianController
Route::get('/registration-non-binusian', [RegistrationNonBinusianController::class, 'registrationNonBinusian'])->name('registration-non-binusian');
Route::post('/create-leader-non-binusian', [RegistrationNonBinusianController::class, 'store']);


// AdminPanelController
Route::get('/admin-panel', [AdminPanelController::class, 'adminPanel'])->name('admin-panel');
