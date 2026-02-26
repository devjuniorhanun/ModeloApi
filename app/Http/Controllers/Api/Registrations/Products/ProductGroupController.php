<?php

namespace App\Http\Controllers\Api\Registrations\Products;

use App\Http\Controllers\Controller;
use App\Models\Api\Registrations\Products\ProductGroup;
use Illuminate\Http\Request;

class ProductGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productGroups = ProductGroup::all();
        return response()->json($productGroups);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productGroup = ProductGroup::create($request->all());

        return response()->json($productGroup, 201);
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
