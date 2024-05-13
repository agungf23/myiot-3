<?php

namespace App\Http\Controllers;
use App\Models\Device;

use Illuminate\Http\Request;

class DeviceController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Device::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $device = new Device;
        $device->name = $request->name;
        $device->save();
        return response()->json([
        "message" > "Device telah ditambahkan."
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Device::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Device::where('id', $id)->exists()) {
            $device = Device::find($id);
            $device->name = is_null($request->name) ? $device->name : $request->name;
            $device->save();
            return response()->json(["message" > "Device telah diupdate."], 201);
            } else {
                return response()->json(["message" > "Device tidak ditemukan."], 404);
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Device::where('id', $id)->exists()) {
            $device = Device::find($id);
            $device->delete();
            return response()->json(["message" > "Device telah dihapus."], 201);
        } else {
            return response()->json(["message" > "Device tidak ditemukan."], 404);
        }
    }

    public function web_index(){
        return view('devices', [
            "title" => "devices",
            "devices" => Device::all()
        ]);
    }

    public function web_show($id){
        return view('device', [
            "title" => "device",
            "device" => Device::find($id)
        ]);
    }
}
