<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function index()
    {
        return Log::all();
    }

    public function store(Request $request)
    {
        $log = new Log;
        $log->device_id = $request->device_id;
        $log->data = $request->data;
        $log->save();

        if(Device::where('id', $request->device_id)->exists()){
            $device = Device::find($request->device_id);
            $device->current_value = $request->data;
            $device->save();
        }
        return response()->json(["message" > "Device Added."], 201);
    }

    public function show(string $id)
    {
        return Log::find($id);
    }

    public function web_show($id){
        return view('device', [
            "title" => "device",
            "device" => Device::find($id)
        ]);
    }
}
