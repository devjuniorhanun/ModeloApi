<?php

namespace App\Http\Controllers\Api\Registrations\Harvest;

use App\Http\Controllers\Controller;
use App\Models\Api\Registrations\Harvest\Culture;
use Illuminate\Http\Request;

class CultureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cultures = Culture::all();
        return response()->json($cultures);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = $request->all();
        $culture = Culture::create($date);
        return response()->json($culture, 201);

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
        $date = $request->all();
        $culture = Culture::findOrFail($id);
        $culture->update($date);
        return response()->json($culture, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
