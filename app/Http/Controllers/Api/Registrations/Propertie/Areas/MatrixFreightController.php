<?php

namespace App\Http\Controllers\Api\Registrations\Propertie\Areas;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Propertie\Areas\MatrixFreightResource;
use App\Models\Api\Registrations\Propertie\Areas\MatrixFreight;
use Illuminate\Http\Request;

class MatrixFreightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matrixFreights = MatrixFreight::with("crop")->get();
        return MatrixFreightResource::collection($matrixFreights);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $matrixFreight = MatrixFreight::create($request->all());    
        return response()->json($matrixFreight, 201);
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
