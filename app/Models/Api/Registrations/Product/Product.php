<?php

namespace App\Models\Api\Registrations\Product;

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
        'product_group_id',
        'sub_group_product_id',
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
        return $this->belongsTo(ProductGroup::class);
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
