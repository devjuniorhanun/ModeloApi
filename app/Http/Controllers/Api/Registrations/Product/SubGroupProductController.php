<?php

namespace App\Http\Controllers\Api\Registrations\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Product\SubGroupProductResoucer;
use App\Models\Api\Registrations\Product\SubGroupProduct;
use Illuminate\Http\Request;

class SubGroupProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subGroupProducts = SubGroupProduct::with('productGroup')->get();
        return SubGroupProductResoucer::collection($subGroupProducts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subGroupProduct = SubGroupProduct::create($request->all());
        return response()->json($subGroupProduct, 201);
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

    public function getSubGroupProductsByProductGroup($productGroupId)
    {
        $subGroupProducts = SubGroupProduct::where('product_group_id', $productGroupId)->with('productGroup')->get();
        return SubGroupProductResoucer::collection($subGroupProducts);
    }
}
