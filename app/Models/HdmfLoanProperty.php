<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HdmfLoanProperty extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'client_id',
        'broker_id',
        'model',
        'blk_no',
        'lot_no',
        'floor_area',
        'title_no',
        'processing_fee',
        'corner_lot_fee',
        'commercial_lot_fee',
        'discount',
        'total_contract_price',
        'reservation_fee',
        'equity_term',
        'equity_monthly',
        'equity_start',
        'equity_end',
        'equity_total',
        'loanable_amount',
        'remaining_balance',
        'status',
        'reservation',
        'created_by',
        'updated_by',
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

    public function broker(): BelongsTo
    {
        return $this->belongsTo(Broker::class);
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function hdmfLoanPayments(): HasMany
    {
        return $this->hasMany(HdmfLoanPayment::class);
    }

    public function hdmfLoanPaymentSchedules(): HasMany
    {
        return $this->hasMany(HdmfLoanPaymentSchedule::class);
    }

    public function brokerCommissions(): HasMany
    {
        return $this->hasMany(BrokerCommission::class, 'property_uuid', 'uuid');
    }
}
