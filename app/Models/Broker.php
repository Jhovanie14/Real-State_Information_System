<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Broker extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'uuid', 'name', 'address', 'prc_license', 'tin_no', 'contact_no', 'email', 'image', 'brokerage_firm', 'brokerage_address', 'brokerage_tin_no', 'brokerage_contact_no', 'brokerage_email', 'created_by', 'updated_by', 'created_at', 'updated_at', 'active'
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%');
        }
    }

    public function agents(): HasMany
    {
        return $this->hasMany(Agent::class);
    }

    public function clients(): HasManyThrough
    {
        return $this->hasManyThrough(Client::class, Agent::class);
    }

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }

    public function inhouse_properties(): HasMany
    {
        return $this->hasMany(InHouseProperty::class);
    }

    public function hdmf_properties(): HasMany
    {
        return $this->hasMany(HdmfLoanProperty::class);
    }

    public function commissions(): HasMany
    {
        return $this->hasMany(BrokerCommission::class);
    }

    // public function properties(): HasManyThrough
    // {
    //     return $this->hasManyThrough(Property::class, Client::class);
    // }
}
