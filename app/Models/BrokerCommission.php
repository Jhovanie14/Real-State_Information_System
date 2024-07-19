<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BrokerCommission extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'broker_id',
        'property_uuid',
        'percent',
        'commission',
        'active'
    ];

    public function broker(): BelongsTo
    {
        return $this->belongsTo(Broker::class);
    }

    public function inhouse_property(): BelongsTo
    {
        return $this->belongsTo(InHouseProperty::class, 'property_uuid', 'uuid');
    }

    public function hdmf_property(): BelongsTo
    {
        return $this->belongsTo(HdmfLoanProperty::class, 'property_uuid', 'uuid');
    }
}
