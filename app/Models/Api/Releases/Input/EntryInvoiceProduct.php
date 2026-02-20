<?php

namespace App\Models\Api\Releases\Input;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EntryInvoiceProduct extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entry_invoice_id',
        'product_id',
        'quantity',
        'unit_value',
        'total_value',
    ];

    public function entryInvoice(): BelongsTo
    {
        return $this->belongsTo(EntryInvoice::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
