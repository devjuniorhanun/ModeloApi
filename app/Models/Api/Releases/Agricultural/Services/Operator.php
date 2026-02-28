<?php

namespace App\Models\Api\Releases\Agricultural\Services;

use App\Models\Api\Registrations\Agricultural\AgriculturalOperator;
use App\Models\Api\Registrations\Vehicle\Fleet;
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
        'agricultural_operator_id',
        'fleet_id',
        'function',
    ];

    public function defensive(): BelongsTo
    {
        return $this->belongsTo(Defensive::class);
    }

    public function agriculturalOperator(): BelongsTo
    {
        return $this->belongsTo(AgriculturalOperator::class);
    }

    public function fleet(): BelongsTo
    {
        return $this->belongsTo(Fleet::class);
    }
}
