<?php

namespace App\Http\Controllers\Api\Registrations\Harvest;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Harvest\AgriculturalYearResource;
use App\Models\Api\Registrations\Harvest\AgriculturalYear;
use Illuminate\Http\Request;

class AgriculturalYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agriculturalYears = AgriculturalYear::all();
        return  AgriculturalYearResource::collection($agriculturalYears);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = $request->all();
        //dd($date);
        $agriculturalYear = AgriculturalYear::create($date);
        return response()->json($agriculturalYear, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agriculturalYear = AgriculturalYear::findOrFail($id);
        return response()->json($agriculturalYear);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $date = $request->all();
        $agriculturalYear = AgriculturalYear::findOrFail($id);
        $agriculturalYear->update($date);
        return response()->json($agriculturalYear, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
