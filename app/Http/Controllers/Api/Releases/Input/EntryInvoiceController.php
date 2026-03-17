<?php

namespace App\Http\Controllers\Api\Releases\Input;

use App\Http\Controllers\Controller;
use App\Models\Api\Releases\Input\EntryInvoice;
use Illuminate\Http\Request;

class EntryInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entryInvoices = EntryInvoice::with(['supplier', 'producer'])->get();
        return response()->json($entryInvoices);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $entryInvoice = EntryInvoice::create($request->all());
        return response()->json($entryInvoice, 201);
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
        $entryInvoice = EntryInvoice::findOrFail($id);
        $entryInvoice->update($request->all());
        return response()->json($entryInvoice);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
