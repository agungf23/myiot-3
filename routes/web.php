<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});

// devices
Route::get('/devices', function () {
    return view('devices', [
        "title" => "devices",
        "name" => "sensor suhu",
        "max_value" => 100,
        "min_value" => 0,
        "current_value" => 25
    ]);
});

// rules
Route::get('/rules', function () {
    return view('rules', [
        "title" => "rules"
    ]);
});

// users
Route::get('/users', function () {
    return view('users', [
        "title" => "users"
    ]);
});
