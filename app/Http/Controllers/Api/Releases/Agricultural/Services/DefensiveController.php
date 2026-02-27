<?php

namespace App\Http\Controllers\Api\Releases\Agricultural\Services;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Releases\Agricultural\Services\DefensiveResource;
use App\Models\Api\Registrations\Propertie\Areas\Field;
use App\Models\Api\Releases\Agricultural\Services\Defensive;
use App\Models\Api\Releases\Agricultural\Services\Operator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DefensiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Defensives = Defensive::with('typeOperation', 'crop', 'culture', 'field', 'agriculturalOperator', 'operators', 'products')->get();
        return DefensiveResource::collection($Defensives);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // Recebe os talhões e crie um Serviço de Defensivo para cada um deles
        foreach ($data['fields'] as $field) {
            // Inicia uma transação para garantir a integridade dos dados
            DB::transaction(function () use ($data, $field) {
                $data['applied_area'] = $field['area'];
                $data['field_id'] = $field['field_id'];
                // Cria um novo Serviço de Defensivo para cada campo
                $defensive = Defensive::create($data);

                // Percorre os operadores agrícolas associados ao campo e cria os relacionamentos
                foreach ($data['operators'] as $operator) {
                    //
                    $op = Operator::create([
                        'defensive_id' => $defensive->id,
                        'agriculturalOperator_id' => $operator['operator_id'],
                        'fleet_id' => $operator['fleet_id'],
                        'function' => $operator['function'],
                    ]);
                    // Se a função do operador for 'T', cria os relacionamentos com os produtos utilizados
                    if ($operator['function'] == 'T') {
                        // Percorre os produtos associados ao operador e cria os relacionamentos
                        foreach ($data['products'] as $product) {
                            $defensive->products()->create([
                                'defensive_id' => $defensive->id,
                                'operation_id' => $op->id,
                                'product_id' => $product['product_id'],
                                'dose' => $product['dose'],
                                'pump' => $product['pump'],
                            ]);
                        }
                    }
                }
                return response()->json($defensive, 201);
            });
            //dd($field['area']);

        }
        //dd($data);
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

    public function getFreeArea($fieldId)
    {
        $field = Field::findOrFail($fieldId);
        $usedArea = Defensive::where('field_id', $fieldId)->sum('applied_area');
        $freeArea = $field->area - $usedArea;

        return response()->json(['free_area' => $freeArea]);
    }
}
