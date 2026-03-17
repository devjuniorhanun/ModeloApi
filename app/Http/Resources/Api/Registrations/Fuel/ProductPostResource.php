<?php

namespace App\Http\Resources\Api\Registrations\Fuel;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductPostResource extends JsonResource
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
            'post_id' => $this->post_id,
            'post_name' => $this->post->name,
            'product_id' => $this->product_id,
            'product_name' => $this->product->name,
            'actual_stock' => $this->actual_stock,
            'minimum_stock' => $this->minimum_stock,
            'maximum_stock' => $this->maximum_stock,
            'status' => $this->status,
        ];
    }
}
