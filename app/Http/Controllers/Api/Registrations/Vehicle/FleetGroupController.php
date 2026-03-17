<?php

namespace App\Http\Controllers\Api\Registrations\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Api\Registrations\Vehicle\FleetGroup;
use Illuminate\Http\Request;

class FleetGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $FleetGroup = FleetGroup::all();
        return response()->json($FleetGroup);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $FleetGroup = FleetGroup::create($request->all());
        return response()->json($FleetGroup, 201);
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
        $FleetGroup = FleetGroup::findOrFail($id);
        $FleetGroup->update($request->all());
        return response()->json($FleetGroup, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
