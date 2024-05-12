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
    return view('devices');
});

// rules
Route::get('/rules', function () {
    return view('rules');
});

// users
Route::get('/users', function () {
    return view('users');
});
