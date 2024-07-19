<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HdmfLoanPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'client_id',
        'hdmf_loan_property_id',
        'payment_for',
        'payment_amount',
        'payment_date',
        'total_balance',
        'or',
        'created_by',
        'updated_by',
        'active'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function hdmfLoanProperty(): BelongsTo
    {
        return $this->belongsTo((HdmfLoanProperty::class));
    }

    public function reservation(): BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }
}
