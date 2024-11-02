<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RideController;

Route::get('/', function () {
    return view('landing');
});
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show'); // Updated to showRegister route
Route::post('/register', [AuthController::class, 'register'])->name('register'); // Name for register action

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/drivers', [DriverController::class, 'index'])->name('drivers.index');
Route::get('/rides', [RideController::class, 'index'])->name('rides.index');