<?php

namespace App\Http\Resources\Api\Registrations\Vehicle;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FleetModelResource extends JsonResource
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
            'name' => $this->name,
            'fleet_brand_id' => $this->fleet_brand_id,
            'fleet_brand_name' => $this->fleetBrand->name,
        ];
    }
}
