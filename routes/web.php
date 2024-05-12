<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

// devices
Route::get('/devices', function () {
    return view('devices', [
        "name" => "sensor suhu",
        "max_value" => 100,
        "min_value" => 0,
        "current_value" => 25
    ]);
});

// rules
Route::get('/rules', function () {
    return view('rules');
});

// users
Route::get('/users', function () {
    return view('users');
});
