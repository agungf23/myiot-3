<?php

namespace App\Http\Controllers;
use App\Models\Device;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index(){
        return view('devices', [
            "title" => "devices",
            "devices" => Device::all()
        ]);
    }

    public function show($id){
        return view('device', [
            "title" => "device",
            "device" => Device::show($id)
        ]);
    }
}
