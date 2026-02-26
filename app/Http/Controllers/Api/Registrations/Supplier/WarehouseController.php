<?php

namespace App\Http\Controllers\Api\Registrations\Supplier;

use App\Http\Controllers\Controller;
use App\Models\Api\Registrations\Supplier\Warehouse;
use Illuminate\Http\Request;
use App\Http\Resources\Api\Registrations\Suppliers\WarehouseResource;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warehouses = Warehouse::with('supplier')->get();
        return WarehouseResource::collection($warehouses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $warehouses = Warehouse::create($request->all());
        return response()->json($warehouses, 201);
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
