<?php

namespace App\Models\Api\Registrations\Products;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_product_id',
        'sub_group_product_id',
        'purpose_product_id',
        'name',
        'stock',
        'stock_location',
        'minimum_quantity',
        'drum_box',
        'gallon_package',
        'unit',
        'status',
    ];

    public function groupProduct(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Api\Registrations\Products\SubGroupProduct::class);
    }

    public function subGroupProduct(): BelongsTo
    {
        return $this->belongsTo(SubGroupProduct::class);
    }

    public function purposeProduct(): BelongsTo
    {
        return $this->belongsTo(PurposeProduct::class);
    }
}
