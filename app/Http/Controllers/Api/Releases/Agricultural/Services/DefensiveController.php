<?php

namespace App\Http\Controllers\Api\Releases\Agricultural\Services;

use App\Http\Controllers\Controller;
use App\Models\Api\Releases\Agricultural\Services\Defensive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DefensiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Defensives = Defensive::with('typeOperation', 'crop', 'culture', 'field')->get();
        return response()->json($Defensives);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $defensive = Defensive::create($request->all());
            return response()->json($defensive, 201);

        });
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
