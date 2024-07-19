<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'client_id',
        'model',
        'contract',
        'downpayment_term',
        'balance_term',
        'downpayment_scheme_total',

        'balance_scheme_total',
        'downpayment',
        'upholding_date',
        'blk_no',
        'lot_no',
        'floor_area',
        'title_no',
        'package_price',
        'equity_fee',
        'processing_fee',
        'corner_lot_fee',
        'commercial_lot_fee',

        'loanable_amount',
        'discount',
        'total_contract_price',
        'status',
        'created_by',
        'updated_by',

        'created_at',
        'updated_at',
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

    public function property(): HasOne
    {
        return $this->hasOne(Property::class);
    }

    public function houseModels(): HasMany
    {
        return $this->hasMany(HouseModel::class);
    }

    public function broker(): BelongsTo
    {
        return $this->belongsTo(Broker::class);
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
