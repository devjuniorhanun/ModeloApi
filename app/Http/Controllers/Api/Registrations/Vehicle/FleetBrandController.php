<?php

namespace App\Http\Controllers\Api\Registrations\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Api\Registrations\Vehicle\FleetBrand;
use Illuminate\Http\Request;

class FleetBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fleetBrands = FleetBrand::all();
        return response()->json($fleetBrands);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fleetBrand = FleetBrand::create($request->all());
        return response()->json($fleetBrand, 201);
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
