<?php

namespace App\Http\Resources\Api\Registrations\Propertie\Areas;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FieldResource extends JsonResource
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
            'farm_id' => $this->farm_id,
            'farm_name' => $this->farm->name,
            'name' => $this->name,
            'area' => $this->area,
            'block' => $this->block,
            'status' => $this->status,
        ];
    }
}
