<?php

use App\Http\Controllers\CountyController;
use App\Http\Controllers\SubCountyController;
use App\Http\Controllers\DriverController;

Route::post('/drivers/register', [DriverController::class, 'register']);
Route::post('/drivers/login', [DriverController::class, 'login']);
Route::get('/drivers/counties', [DriverController::class, 'getCounties']);
Route::get('/drivers/subcounties/{countyId}', [DriverController::class, 'getSubCounties']);


Route::apiResource('counties', CountyController::class);
Route::apiResource('sub-counties', SubCountyController::class);
