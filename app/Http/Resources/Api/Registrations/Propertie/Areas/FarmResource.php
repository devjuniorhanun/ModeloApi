<?php

namespace App\Http\Resources\Api\Registrations\Propertie\Areas;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FarmResource extends JsonResource
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
            'owner_id' => $this->owner_id,
            'producer_id' => $this->producer_id,
            'owner_name' => $this->owner->corporate_name,
            'producer_name' => $this->producer->owner->corporate_name,
            'name' => $this->name,
            'total_area' => $this->total_area,
            'status' => $this->status,
        ];
    }
}
