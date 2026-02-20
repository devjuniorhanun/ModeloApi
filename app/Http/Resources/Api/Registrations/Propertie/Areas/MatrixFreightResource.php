<?php

namespace App\Http\Resources\Api\Registrations\Propertie\Areas;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MatrixFreightResource extends JsonResource
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
            'crop_id' => $this->crop_id,
            'crop_name' => $this->crop->name,
            'block' => $this->block,
            'price' => $this->price,            
            'status' => $this->status,
        ];
    }
}
