<?php

namespace App\Http\Controllers\Api\Registrations\Propertie\Areas;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Registrations\Propertie\Areas\PlotFieldResource;
use App\Models\Api\Registrations\Propertie\Areas\Field;
use App\Models\Api\Registrations\Propertie\Areas\PlotField;
use Illuminate\Http\Request;

class PlotFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plotFields = PlotField::with('field', 'crop', 'culture','varietyCulture')->get();
        return PlotFieldResource::collection($plotFields);
        //return response()->json($plotFields);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $plotField = PlotField::create($request->all());
        return response()->json($plotField, 201);
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

    public function getFreeAreaByField(string $cropId,string $fieldId)
    {
        $usedArea = PlotField::where('crop_id', $cropId)->where('field_id', $fieldId)->sum('area');
        $field = Field::find($fieldId);
        $freeArea = $field->area - $usedArea;
        
        return response()->json(['free_area' => $freeArea]);
    }

    /*
    public function free_area($farmId)
     {
         $fields = Field::where('farm_id', $farmId)->get();
         $totalArea = 0;
         foreach ($fields as $field) {
             $totalArea += $field->area;
         }
 
         $farm = Farm::find($farmId);
         //dd($farm->total_area);
         $freeArea = $farm->total_area - $totalArea;
 
         return response()->json(['free_area' => $freeArea]);
     }  
    */
}
