<?php

namespace App\Http\Controllers\Api\Registrations\Agricultural;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Agricultural\AgriculturalOperatorResource;
use App\Models\Api\Registrations\Agricultural\AgriculturalOperator;
use Illuminate\Http\Request;

class AgriculturalOperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agriculturalOperators = AgriculturalOperator::all();
        return AgriculturalOperatorResource::collection($agriculturalOperators);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agriculturalOperator = AgriculturalOperator::create($request->all());
        return new AgriculturalOperatorResource($agriculturalOperator);
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
        $agriculturalOperator = AgriculturalOperator::findOrFail($id);
        $agriculturalOperator->update($request->all());
        return new AgriculturalOperatorResource($agriculturalOperator);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
