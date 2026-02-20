<?php

namespace App\Models\Api\Registrations\Harvest;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VarietyCulture extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'culture_id',
        'name',
        'technology',
        'cycle',
        'status',
    ];

    public function culture(): BelongsTo
    {
        return $this->belongsTo(Culture::class);
    }
}
