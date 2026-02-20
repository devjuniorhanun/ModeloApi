<?php

namespace App\Http\Controllers\Api\Registrations\Harvest;

use App\Http\Controllers\Controller;
use App\Models\Api\Registrations\Harvest\VarietyCulture;
use Illuminate\Http\Request;

class VarietyCultureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $varietyCultures = VarietyCulture::all();
        return response()->json($varietyCultures);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = $request->all();
        $varietyCulture = VarietyCulture::create($date);
        return response()->json($varietyCulture, 201);
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
        $varietyCulture = VarietyCulture::findOrFail($id);
        $varietyCulture->update($date);
        return response()->json($varietyCulture, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
