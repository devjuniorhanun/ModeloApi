<?php

namespace App\Models\Api\Releases\Agricultural\Services;

use App\Models\Api\Registrations\Agricultural\{AgriculturalOperator, TypeOperation};
use App\Models\Api\Registrations\Harvest\{Crop, Culture};
use App\Models\Api\Registrations\Propertie\Areas\Field;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Defensive extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_operation_id',
        'crop_id',
        'culture_id',
        'field_id',
        'application_date',
        'pump_volume',
        'flow',
        'ump_capacity',
        'recommended_pump_volume',
        'used_bomb',
        'difference_bomb',
        'applied_area',
        'observation',
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
            'application_date' => 'date',
        ];
    }

    public function typeOperation(): BelongsTo
    {
        return $this->belongsTo(TypeOperation::class);
    }

    public function crop(): BelongsTo
    {
        return $this->belongsTo(Crop::class);
    }

    public function culture(): BelongsTo
    {
        return $this->belongsTo(Culture::class);
    }

    public function field(): BelongsTo
    {
        return $this->belongsTo(Field::class);
    }

    public function agriculturalOperator(): BelongsTo
    {
        return $this->belongsTo(AgriculturalOperator::class,);
    }

    public function operators()
    {
        return $this->hasMany(Operator::class);
    }

    public function products()
    {
        return $this->hasMany(ProductService::class);
    }
}
