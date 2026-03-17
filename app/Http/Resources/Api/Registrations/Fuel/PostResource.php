<?php

namespace App\Http\Resources\Api\Registrations\Fuel;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'type_post_id' => $this->typePost->id,
            'type_post_name' => $this->typePost->name,
            'name' => $this->name,
            'status' => $this->status,
        ];
    }
}
