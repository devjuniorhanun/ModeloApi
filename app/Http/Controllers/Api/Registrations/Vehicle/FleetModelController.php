<?php

namespace App\Http\Controllers\Api\Registrations\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Vehicle\FleetModelResource;
use App\Models\Api\Registrations\Vehicle\FleetModel;
use Illuminate\Http\Request;

class FleetModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fleetModels = FleetModel::with('fleetBrand')->get();
        return FleetModelResource::collection($fleetModels);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fleetModel = FleetModel::create($request->all());
        return response()->json($fleetModel, 201);
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
