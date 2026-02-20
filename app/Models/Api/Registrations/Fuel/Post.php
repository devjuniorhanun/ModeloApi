<?php

namespace App\Models\Api\Registrations\Fuel;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_post_id',
        'name',
    ];

    public function typePost(): BelongsTo
    {
        return $this->belongsTo(TypePost::class);
    }
}
