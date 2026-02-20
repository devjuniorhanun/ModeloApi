<?php

namespace App\Http\Controllers\Api\Registrations\Propertie\Areas;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Propertie\Areas\FarmResource;
use App\Models\Api\Registrations\Propertie\Areas\Farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $farms = Farm::with('owner')->with('producer.owner')->get();
        return FarmResource::collection($farms);
        //return response()->json($farms);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = $request->all();
        $farm = Farm::create($date);
        return response()->json($farm, 201);
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
