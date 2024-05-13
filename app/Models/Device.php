<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Device extends Model
// {
//     use HasFactory;
// }

class Device{
    private static $devices = [
        [
            "id" => 1,
            "name" => "Sensor Suhu"
        ],
        [
            "id" => 2,
            "name" => "Kipas Angin"
        ],
        [
            "id" => 3,
            "name" => "Lampu Kamar"
        ],
        [
            "id" => 4,
            "name" => "Lampu Taman"
        ],
        [
            "id" => 5,
            "name" => "Sensor Suhu"
        ]
    ];

    public static function all(){
        return self::$devices;
    }

    public static function show($id){
        $devices = self::$devices;
        $selected_device = [];
        foreach($devices as $device){
            if($device["id"] == $id){
                $selected_device = $device;
            }
        };
        return $selected_device;
    }
}
