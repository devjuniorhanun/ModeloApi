<?php

namespace App\Models\Api\Registrations\Propertie\Areas;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Farm extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id',
        'producer_id',
        'name',
        'total_area',
        'status',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Api\Registrations\Propertie\Owner::class);
    }

    public function producer(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Api\Registrations\Propertie\Producer::class);
    }
}
