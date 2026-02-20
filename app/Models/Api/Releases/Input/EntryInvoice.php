<?php

namespace App\Models\Api\Releases\Input;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EntryInvoice extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supplier_id',
        'producer_id',
        'numbernote_number',
        'serie',
        'emission_date',
        'arrival_date',
        'total_value',
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
            'emission_date' => 'date',
            'arrival_date' => 'date',
        ];
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function producer(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Api\Registrations\Propertie\Producer::class);
    }
}
