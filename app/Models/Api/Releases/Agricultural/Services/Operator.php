<?php

namespace App\Models\Api\Releases\Agricultural\Services;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Operator extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'defensive_id',
        'operator_id',
        'fleet_id',
        'function',
    ];

    public function defensive(): BelongsTo
    {
        return $this->belongsTo(Defensive::class);
    }

    public function operator(): BelongsTo
    {
        return $this->belongsTo(Operator::class);
    }

    public function fleet(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Api\Registrations\Vehicles\Fleet::class);
    }
}
