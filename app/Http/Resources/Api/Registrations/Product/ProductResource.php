<?php

namespace App\Http\Resources\Api\Registrations\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       // dd($this->productGroup);
        return [
            'id' => $this->id,
            'product_group_id' => $this->productGroup->id,
            'group_product_name' => $this->productGroup->name,
            'sub_group_product_id' => $this->subGroupProduct->id,
            'sub_group_product_name' => $this->subGroupProduct->name,
            'name' => $this->name,
            'stock' => $this->stock,
            'stock_location' => $this->stock_location,
            'minimum_quantity' => $this->minimum_quantity,
            'drum_box' => $this->drum_box,
            'gallon_package' => $this->gallon_package,
            'unit' => $this->unit,
            'status' => $this->status,
        ];
    }
}
