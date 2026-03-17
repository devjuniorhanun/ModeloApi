<?php

namespace App\Http\Resources\Api\Registrations\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubGroupProductResouce extends JsonResource
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
            'product_group_id' => $this->product_group_id,
            'product_group_name' => $this->productGroup->name,
            'name' => $this->name,
            'status' => $this->status,
        ];
    }
}
