<?php

namespace App\Http\Controllers\Api\Registrations\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Vehicle\FleetResource;
use App\Models\Api\Registrations\Vehicle\Fleet;
use Illuminate\Http\Request;

class FleetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fleets = Fleet::with('fleetGroup', 'fleetBrand', 'fleetModel')->get();
        return FleetResource::collection($fleets);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fleet = Fleet::create($request->all());
        return response()->json($fleet, 201);
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
