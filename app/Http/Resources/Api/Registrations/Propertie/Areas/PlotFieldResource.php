<?php

namespace App\Http\Resources\Api\Registrations\Propertie\Areas;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlotFieldResource extends JsonResource
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
            'field_id' => $this->field_id,
            'field_name' => $this->field->name,
            'crop_id' => $this->crop_id,
            'crop_name' => $this->crop->name,
            'culture_id' => $this->culture_id,
            'culture_name' => $this->culture->name,            
            'name' => $this->name,
            'area' => $this->area,
            'status' => $this->status,
        ];
    }
}
