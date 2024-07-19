<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InHousePayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'client_id',
        'in_house_property_id',
        'payment_for',
        'payment_amount',
        'payment_date',
        'total_balance',
        'paid',
        'created_by',
        'updated_by',
        'active'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function reservation(): BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }
    
    public function inHouseProperty(): BelongsTo
    {
        return $this->belongsTo((InHouseProperty::class));
    }

}
