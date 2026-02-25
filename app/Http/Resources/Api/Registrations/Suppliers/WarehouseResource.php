<?php

namespace App\Http\Resources\Api\Registrations\Suppliers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WarehouseResource extends JsonResource
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
            'city' => $this->city,
            'route' => $this->route,
            'status' => $this->status,
        ];
    }
}
