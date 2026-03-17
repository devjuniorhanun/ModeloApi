<?php

namespace App\Http\Controllers\Api\Registrations\Fuel;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Fuel\ProductPostResource;
use App\Models\Api\Registrations\Fuel\ProductPost;
use Illuminate\Http\Request;

class ProductPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productPosts = ProductPost::with(['post', 'product'])->get();
        return ProductPostResource::collection($productPosts);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productPost = ProductPost::create($request->all());
        return response()->json($productPost, 201);
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
        $productPost = ProductPost::findOrFail($id);
        $productPost->update($request->all());
        return response()->json($productPost);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
