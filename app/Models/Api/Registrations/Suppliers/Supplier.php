<?php

namespace App\Models\Api\Registrations\Suppliers;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Supplier extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'corporate_reason',
        'fantasy_name',
        'cpf_cnpj',
        'rg_ie',
        'status',
    ];

    public function typeSuppliers(): BelongsToMany
    {
        return $this->belongsToMany(TypeSupplier::class);
    }
}
