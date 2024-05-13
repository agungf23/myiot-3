<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// device
Route::get('/device', [DeviceController::class, 'index']);
Route::post('/device', [DeviceController::class, 'store']);
Route::get('/device/{id}', [DeviceController::class, 'show']);
Route::put('/device/{id}', [DeviceController::class,'update']);
Route::delete('/device/{id}', [DeviceController::class,'destroy']);
