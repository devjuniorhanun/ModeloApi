<?php

namespace App\Http\Controllers\Api\Registrations\Propertie;

use App\Http\Controllers\Controller;
use App\Models\Api\Registrations\Propertie\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owner = Owner::all();
        return response()->json($owner);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = $request->all();
        $owner = Owner::create($date);
        return response()->json($owner, 201);
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
        $owner = Owner::findOrFail($id);
        $owner->update($date);
        return response()->json($owner, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
