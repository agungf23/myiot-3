<?php

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
Route::get('/devices', function () {

    return view('devices', [
        "title" => "devices",
        "devices" => Device::all()
    ]);
});

Route::get('/devices/{id}', function ($id) {
    $devices = [
        [
            "id" => 1,
            "name" => "Sensor Suhu",
            "min_value" => 0,
            "max_value" => 100,
            "current_value" => 25
        ],
        [
            "id" => 2,
            "name" => "Kipas Angin",
            "min_value" => 0,
            "max_value" => 5,
            "current_value" => 2
        ],
        [
            "id" => 3,
            "name" => "Lampu Kamar",
            "min_value" => 0,
            "max_value" => 100,
            "current_value" => 50
        ],
        [
            "id" => 4,
            "name" => "Lampu Taman",
            "min_value" => 0,
            "max_value" => 1,
            "current_value" => 1
        ],
        [
            "id" => 5,
            "name" => "Sensor Suhu",
            "min_value" => 0,
            "max_value" => 100,
            "current_value" => 25
        ]

    ];

    $select_device = [];
    foreach($devices as $device){
        if($device["id"] == $id){
            $select_device = $device;
        }
    };

    return view('device', [
        "title" => "device",
        "device" => $select_device
    ]);
});

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
