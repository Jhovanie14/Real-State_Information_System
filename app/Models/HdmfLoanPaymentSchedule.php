<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HdmfLoanPaymentSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'client_id',
        'hdmf_loan_property_id',
        'payment_for',
        'payment_remaining',
        'payment_amount',
        'payment_date',
        'total_balance',
        'paid',
        'created_by',
        'updated_by',
        'active'
    ];

    public function hdmfLoanProperty(): BelongsTo
    {
        return $this->belongsTo(HdmfLoanProperty::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
