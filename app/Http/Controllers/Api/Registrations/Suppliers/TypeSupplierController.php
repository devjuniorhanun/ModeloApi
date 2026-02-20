<?php

namespace App\Http\Controllers\Api\Registrations\Suppliers;

use App\Http\Controllers\Controller;
use App\Models\Api\Registrations\Suppliers\TypeSupplier;
use Illuminate\Http\Request;
use Nette\Utils\Type;

class TypeSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeSupplier = TypeSupplier::all();
        return response()->json($typeSupplier);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = TypeSupplier::create($request->all());
        return response()->json($date, 201);
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
