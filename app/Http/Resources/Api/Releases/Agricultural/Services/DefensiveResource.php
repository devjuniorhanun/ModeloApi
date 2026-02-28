<?php

namespace App\Http\Resources\Api\Releases\Agricultural\Services;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DefensiveResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'crop_name' => $this->crop->name,
            'culture_name' => $this->culture->name,
            'field_name' => $this->field->name,
            'type_operation_name' => $this->typeOperation->name,
            'application_date' => \Carbon\Carbon::parse($this->application_date)->format('Y-m-d'),
            'pump_volume' => $this->pump_volume,
            'flow' => $this->flow,
            'ump_capacity' => $this->ump_capacity,
            'recommended_pump_volume' => $this->recommended_pump_volume,
            'used_bomb' => $this->used_bomb,
            'difference_bomb' => $this->difference_bomb,
            'applied_area' => $this->applied_area,
            'observation' => $this->observation,
            //'culture_ids' => $this->cultures->pluck('id')->toArray(),
            'field_id' => $this->field->id,
            'status' => $this->status,
        ];
    }
}
