<?php

namespace App\Http\Controllers\Api\Registrations\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Supplier\LanyardResource;
use App\Models\Api\Registrations\Suppliers\Lanyard;
use Illuminate\Http\Request;

class LanyardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lanyards = Lanyard::with('supplier')->get();
        return LanyardResource::collection($lanyards);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lanyard = Lanyard::create($request->all());
        return response()->json($lanyard, 201);
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
