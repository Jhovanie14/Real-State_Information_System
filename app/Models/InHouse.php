<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class InHouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'client_id',
        'broker_id',
        'model',
        'downpayment',

        'downpayment_term',
        'downpayment_total',
        'balance_term',
        'balance_total',
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
            // $query->where('model', 'like', '%' . request('search') . '%');
            $searchTerm = '%' . $filters['search'] . '%';

            $query->whereHas('client', function ($subquery) use ($searchTerm) {
                $subquery->where('first_name', 'like', $searchTerm)
                    ->orWhere('last_name', 'like', $searchTerm)
                    ->orWhere('middle_name', 'like', $searchTerm);
            });
        }
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function inHouseProperty(): HasOne
    {
        return $this->hasOne(InHouseProperty::class);
    }

    public function houseModels(): HasMany
    {
        return $this->hasMany(HouseModel::class);
    }

    public function broker(): BelongsTo
    {
        return $this->belongsTo(Broker::class);
    }

    public function inHousePaymentSchedules(): HasMany
    {
        return $this->hasMany(inHousePaymentSchedule::class);
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
