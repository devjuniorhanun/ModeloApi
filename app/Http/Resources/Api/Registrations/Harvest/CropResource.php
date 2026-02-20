<?php

namespace App\Http\Resources\Api\Registrations\Harvest;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CropResource extends JsonResource
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
            'agricultural_year_id' => $this->agricultural_year_id,
            'name' => $this->name,
            'opening_date' => \Carbon\Carbon::parse($this->opening_date)->format('Y-m-d'),
            'closing_date' => \Carbon\Carbon::parse($this->closing_date)->format('Y-m-d'),
            'status' => $this->status,
            'culture_ids' => $this->cultures->pluck('id')->toArray(),
        ];
    }
}
