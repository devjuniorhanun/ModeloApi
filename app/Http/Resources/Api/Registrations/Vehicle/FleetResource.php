<?php

namespace App\Http\Resources\Api\Registrations\Vehicle;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FleetResource extends JsonResource
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
            'fleet_group_id' => $this->fleet_group_id,
            'fleet_group_name' => $this->fleetGroup->name,
            'fleet_brand_id' => $this->fleet_brand_id,
            'fleet_brand_name' => $this->fleetBrand->name,
            'fleet_model_id' => $this->fleet_model_id,
            'fleet_model_name' => $this->fleetModel->name,
            'name' => $this->name,
            'code' => $this->code,
            'plate' => $this->plate,
            'fleet_type' => $this->fleet_type,
            'year' => $this->year,
            'chassi' => $this->chassi,
            'acquisition_date' => $this->acquisition_date,
            'acquisition_value' => $this->acquisition_value,
            'fuel_type' => $this->fuel_type,
            'marking_type' => $this->marking_type,
            'starting_meter' => $this->starting_meter,
            'end_gauge' => $this->end_gauge,
            'status' => $this->status,
        ];
    }
}
