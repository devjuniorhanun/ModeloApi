<?php

namespace App\Models\Api\Registrations\Vehicles;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fleet extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fleet_group_id',
        'fleet_brand_id',
        'fleet_model_id',
        'name',
        'code',
        'plate',
        'fleet_type',
        'year',
        'chassi',
        'acquisition_date',
        'acquisition_value',
        'fuel_type',
        'marking_type',
        'starting_meter',
        'end_gauge',
        'status',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'acquisition_date' => 'date',
        ];
    }

    public function fleetGroup(): BelongsTo
    {
        return $this->belongsTo(FleetGroup::class);
    }

    public function fleetBrand(): BelongsTo
    {
        return $this->belongsTo(FleetBrand::class);
    }

    public function fleetModel(): BelongsTo
    {
        return $this->belongsTo(FleetModel::class);
    }
}
