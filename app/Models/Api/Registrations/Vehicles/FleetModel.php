<?php

namespace App\Models\Api\Registrations\Vehicles;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FleetModel extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fleet_brand_id',
        'name',
    ];

    public function fleetBrand(): BelongsTo
    {
        return $this->belongsTo(FleetBrand::class);
    }
}
