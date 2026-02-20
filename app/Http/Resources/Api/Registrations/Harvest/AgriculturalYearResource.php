<?php

namespace App\Http\Resources\Api\Registrations\Harvest;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AgriculturalYearResource extends JsonResource
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
            'opening_date' => \Carbon\Carbon::parse($this->opening_date)->format('Y-m-d'),
            'closing_date' => \Carbon\Carbon::parse($this->closing_date)->format('Y-m-d'),
            //'status' => ($this->status == "A")? "Ativo" : "Inativo",
            'status' => $this->status,
        ];
    }
}
