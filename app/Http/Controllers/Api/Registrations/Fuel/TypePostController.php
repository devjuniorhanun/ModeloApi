<?php

namespace App\Http\Controllers\Api\Registrations\Fuel;

use App\Http\Controllers\Controller;
use App\Models\Api\Registrations\Fuel\TypePost;
use Illuminate\Http\Request;
use Nette\Utils\Type;

class TypePostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typePosts = TypePost::all();
        return response()->json($typePosts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $typePost = TypePost::create($request->all());
        return response()->json($typePost, 201);
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
        $typePost = TypePost::findOrFail($id);
        $typePost->update($request->all());
        return response()->json($typePost);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
