<?php

namespace App\Http\Controllers\Api\Registrations\Agricultural;

use App\Http\Controllers\Controller;
use App\Models\Api\Registrations\Agricultural\TypeOperation;
use Illuminate\Http\Request;

class TypeOperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeOperations = TypeOperation::all();
        return response()->json($typeOperations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $typeOperation = TypeOperation::create($request->all());
        return response()->json($typeOperation, 201);
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
        $typeOperation = TypeOperation::findOrFail($id);
        $typeOperation->update($request->all());
        return response()->json($typeOperation, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
