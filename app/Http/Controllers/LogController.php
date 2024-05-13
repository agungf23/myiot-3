<?php

namespace App\Http\Controllers;

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
        return response()->json(["message" > "Device Added."], 201);

    }

    public function show(string $id)
    {
        return Log::find($id);
    }
}
