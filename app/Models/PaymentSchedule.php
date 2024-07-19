<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentSchedule extends Model
{
    protected $fillable = [
        'uuid',
        'client_id',
        'property_id',
        'reservation_id',
        'contract',
        'payment_for',
        'payment_amount',
        'payment_date',
        // 'reservation_start_date',
        // 'reservation_end_date',
        // 'upholding_date',
        // 'downpayment_term',
        // 'downpayment_scheme_monthly_payment',
        // 'downpayment_scheme_month_count',
        // 'downpayment_scheme_start_payment',
        // 'downpayment_scheme_end_payment',
        // 'balance_term',
        // 'balance_scheme_monthly_payment',
        // 'balance_scheme_month_count',
        // 'balance_scheme_start_payment',
        // 'balance_scheme_end_payment',
        // 'total_balance',
        'paid',
        'created_by',
        'updated_by',
        'active'
    ];

    use HasFactory;

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function reservation(): BelongsTo
    {
        return $this->belongsTo((Reservation::class));
    }
}
