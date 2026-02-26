<?php

namespace App\Models\Api\Registrations\Supplier;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'type',
        'cpf_cnpj',
        'rg_ie',
        'status',
    ];

    public function typeSuppliers(): BelongsToMany
    {
        return $this->belongsToMany(TypeSupplier::class);
    }

    public function bankSupplier(): HasOne
    {
        return $this->hasOne(BankSupplier::class);
    }
}
