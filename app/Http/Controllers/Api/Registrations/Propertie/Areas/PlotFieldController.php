<?php

namespace App\Http\Controllers\Api\Registrations\Propertie\Areas;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Propertie\Areas\PlotFieldResource;
use App\Models\Api\Registrations\Propertie\Areas\PlotField;
use Illuminate\Http\Request;

class PlotFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plotFields = PlotField::with('field', 'crop', 'culture')->get();
        return PlotFieldResource::collection($plotFields);
        //return response()->json($plotFields);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $plotField = PlotField::create($request->all());
        return response()->json($plotField, 201);
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
