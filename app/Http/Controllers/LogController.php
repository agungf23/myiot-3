<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Log::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $log = new Log;
        $log->log = $request->log;
        $log->save();
        return response()->json([
        "message" > "Device telah ditambahkan."
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Log::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Log::where('id', $id)->exists()) {
            $log = Log::find($id);
            $log->name = is_null($request->log) ? $log->name : $request->log;
            $log->save();
            return response()->json(["message" > "Log telah diupdate."], 201);
            } else {
                return response()->json(["message" > "Log tidak ditemukan."], 404);
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Log::where('id', $id)->exists()) {
            $log = Log::find($id);
            $log->delete();
            return response()->json(["message" > "log telah dihapus."], 201);
        } else {
            return response()->json(["message" > "log tidak ditemukan."], 404);
        }
    }

    public function web_index(){
        return view('logs', [
            "title" => "logs",
            "devices" => Log::all()
        ]);
    }

    public function web_show($id){
        return view('log', [
            "title" => "log",
            "device" => log::show($id)
        ]);
    }
}
