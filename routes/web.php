<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Route;
use App\Models\Device;

Route::get('/', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});

//devices
Route::get('/devices', [DeviceController::class, 'index']);
Route::get('/devices/{id}', [DeviceController::class, 'show']);

// //logs
// Route::get('/logs', function () {
//     $logs = [
//         [
//             "id" => 1,
//             "name" => "Sensor Suhu",
//         ],
//         [
//             "id" => 2,
//             "name" => "Kipas Angin",
//         ],
//         [
//             "id" => 3,
//             "name" => "Lampu Kamar",
//         ],
//         [
//             "id" => 4,
//             "name" => "Lampu Taman",
//         ],
//         [
//             "id" => 5,
//             "name" => "Sensor Suhu",
//         ]

//     ];
//     return view('logs', [
//         "title" => "logs",
//         "devices" => $logs
//     ]);
// });

// Route::get('/logs/{id}', function ($id) {
//     $logs = [
//         [
//             "id" => 1,
//             "name" => "Sensor Suhu",
//         ],
//         [
//             "id" => 2,
//             "name" => "Kipas Angin",
//         ],
//         [
//             "id" => 3,
//             "name" => "Lampu Kamar",
//         ],
//         [
//             "id" => 4,
//             "name" => "Lampu Taman",
//         ],
//         [
//             "id" => 5,
//             "name" => "Sensor Suhu",
//         ]

//     ];

//     $select_log = [];
//     foreach($logs as $log){
//         if($log["id"] == $id){
//             $select_log = $log;
//         }
//     };

//     return view('log', [
//         "title" => "log",
//         "device" => $select_log
//     ]);
// });
