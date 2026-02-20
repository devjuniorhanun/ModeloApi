<?php

namespace App\Models\Api\Registrations\Harvest;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Crop extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'agricultural_year_id',
        'name',
        'opening_date',
        'closing_date',
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
            'opening_date' => 'date',
            'closing_date' => 'date',
        ];
    }

    public function cultures(): BelongsToMany
    {
        return $this->belongsToMany(Culture::class);
    }

    public function agriculturalYear(): BelongsTo
    {
        return $this->belongsTo(AgriculturalYear::class);
    }
}
