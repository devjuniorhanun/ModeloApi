<?php

namespace App\Models\Api\Releases\Harvest;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HarvestRelease extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'crop_id',
        'driver_id',
        'owner_id',
        'plot_field_id',
        'warehouse_id',
        'lanyard_id',
        'matrix_freight_id',
        'release_date',
        'shipping_number',
        'control_number',
        'gross_weight',
        'discount_weight',
        'discount',
        'net_weight',
        'liquid_bags',
        'gross_bags',
        'shipping_value',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'release_date' => 'date',
        ];
    }

    public function crop(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Api\Registrations\Harvest\Crop::class);
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Api\Registrations\Suppliers\Driver::class);
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Api\Registrations\Propertie\Owner::class);
    }

    public function plotField(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Api\Registrations\Propertie\Areas\PlotField::class);
    }

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Api\Registrations\Suppliers\Warehouse::class);
    }

    public function lanyard(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Api\Registrations\Suppliers\Lanyard::class);
    }

    public function matrixFreight(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Api\Registrations\Propertie\Areas\MatrixFreight::class);
    }
}
