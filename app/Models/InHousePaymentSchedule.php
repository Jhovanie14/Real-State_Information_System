<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InHousePaymentSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'client_id',
        'in_house_property_id',
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


    public function inHouseProperty(): BelongsTo
    {
        return $this->belongsTo(InHouseProperty::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function inHouse(): BelongsTo
    {
        return $this->belongsTo((InHouse::class));
    }
}