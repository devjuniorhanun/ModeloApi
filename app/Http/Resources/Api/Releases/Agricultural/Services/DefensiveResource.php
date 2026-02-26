<?php

namespace App\Http\Resources\Api\Releases\Agricultural\Services;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DefensiveResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
