<?php

namespace App\Http\Resources\Api\Registrations\Supplier;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupplierResource extends JsonResource
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
            'corporate_reason' => $this->corporate_reason,
            'fantasy_name' => $this->fantasy_name,
            'cpf_cnpj' => $this->cpf_cnpj,
            'rg_ie' => $this->rg_ie,
            'type' => $this->type,
            'supplier_name' => $this->bankSupplier->supplier_name,
            'bank_name' => $this->bankSupplier->bank_name,
            'agency_number' => $this->bankSupplier->agency_number,
            'account_number' => $this->bankSupplier->account_number,
            'operation_number' => $this->bankSupplier->operation_number,
            'account_type' => $this->bankSupplier->account_type,
            'pix_key' => $this->bankSupplier->pix_key,
            'type_supplier_ids' => $this->typeSuppliers->pluck('id'),
            'status' => $this->status,
        ];
    }
}
