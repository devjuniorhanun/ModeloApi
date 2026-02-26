<?php

namespace App\Http\Resources\Api\Registrations\Supplier;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
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
            'supplier_name' => $this->supplier->fantasy_name,
            'supplier_id' => $this->supplier->id,
            'name' => $this->name,
            'code' => $this->code,
            'plate' => $this->plate,
            'status' => $this->status,
        ];
    }
}
