<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room; 
use Iluminate\Support\Facades\DB; 
use App\Http\Resources\v1\RoomResource; 

class RoomController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api'); 
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return RoomResource::collection(Room::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $room = Room::create($request->all()); 
        return response()->json([
            'status' => true, 
            'message' => 'Room created successfully',
            'room' => $room
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return response()->json(
            Room::find($room)
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
