<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'client_id',
        'reservation_id',
        'broker_id',
        'contract',
        'model',
        'blk_no',
        'lot_no',
        'floor_area',
        'title_no',
        'package_price',
        'equity_fee',
        'processing_fee',
        'corner_lot_fee',
        'commercial_lot_fee',
        'discount',
        'total_contract_price',
        'loanable_amount',
        'downpayment_term',
        'downpayment_total',
        'balance_term',
        'balance_total',
        'total_balance',
        'status',
        'created_by',
        'updated_by',
        'active'
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('model', 'like', '%' . request('search') . '%');
        }
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function reservation(): BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }

    public function houseModels(): HasMany
    {
        return $this->hasMany(HouseModel::class);
    }

    public function broker(): BelongsTo
    {
        return $this->belongsTo(Broker::class);
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function paymentSchedules(): HasMany
    {
        return $this->hasMany(PaymentSchedule::class);
    }
}
