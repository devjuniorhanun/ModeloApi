<?php

namespace App\Http\Controllers\Api\Registrations\Product;

use App\Http\Controllers\Controller;
use App\Models\Api\Registrations\Product\PurposeProduct;
use Illuminate\Http\Request;

class PurposeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purposeProducts = PurposeProduct::all();
        return response()->json($purposeProducts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $purposeProduct = PurposeProduct::create($request->all());

        return response()->json($purposeProduct, 201);
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
