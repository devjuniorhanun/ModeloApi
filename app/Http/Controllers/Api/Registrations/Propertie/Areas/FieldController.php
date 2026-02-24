<?php

namespace App\Http\Controllers\Api\Registrations\Propertie\Areas;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Propertie\Areas\FieldResource;
use App\Models\Api\Registrations\Propertie\Areas\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $field = Field::with('farm')->get();
        return FieldResource::collection($field);
        //return response()->json($field);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $field = Field::create($request->all());
        return response()->json($field, 201);
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

    public function farms_fields($farmId)
    {
        //dd($farmId);
        
        $fields = Field::with('farm')->where('farm.id', $farmId)->get();
        return response()->json($fields);
        
    }
}
