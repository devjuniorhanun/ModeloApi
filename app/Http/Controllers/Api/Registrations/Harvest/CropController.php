<?php

namespace App\Http\Controllers\Api\Registrations\Harvest;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Harvest\CropResource;
use App\Models\Api\Registrations\Harvest\Crop;
use Illuminate\Http\Request;

class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crops = Crop::with('cultures')->get();
        return  CropResource::collection($crops);
        //return response()->json($crops);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = $request->all();
        $crop = Crop::create($date);
        $crop->cultures()->sync($request->input('culture_ids', [])); 
        return response()->json($crop, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $date = $request->all();
        $crop = Crop::findOrFail($id);
        $crop->update($date);
        $crop->cultures()->sync($request->input('culture_ids', [])); 
        return response()->json($crop, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
