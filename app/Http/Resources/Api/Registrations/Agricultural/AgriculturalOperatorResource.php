<?php

namespace App\Http\Resources\Api\Registrations\Agricultural;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AgriculturalOperatorResource extends JsonResource
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
            'employee_id' => $this->employee_id,
            'employee_name' => $this->employee->name,
            'status' => $this->status,
        ];
    }
}
