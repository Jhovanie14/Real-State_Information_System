<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'client_id',
        'property_id',
        'reservation_id',
        'contract',
        'payment_amount',
        'payment_for',
        // 'downpayment_term',
        // 'downpayment_scheme_months_left',
        // 'downpayment_scheme_balance',
        // 'downpayment_scheme_status',
        // 'balance_term',
        // 'balance_scheme_months_left',
        // 'balance_scheme_balance',
        // 'balance_scheme_status',
        'total_balance',
        'notes',
        'created_by',
        'updated_by',
        'active'

    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo((Property::class));
    }

    public function reservation(): BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }
}
