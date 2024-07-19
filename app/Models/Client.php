<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('first_name', 'like', '%' . request('search') . '%')
                ->orWhere('last_name', 'like', '%' . request('search') . '%')
                ->orWhere('middle_name', 'like', '%' . request('search') . '%')
                ->orWhere('suffix', 'like', '%' . request('search') . '%');
        }
    }

    protected $fillable = [
        'id', 'uuid', 'broker_id', 'agent_id', 'image', 'last_name', 'first_name', 'middle_name', 'suffix', 'present_address', 'contact_no', 'gender', 'marital_status', 'date_of_birth', 'place_of_birth', 'nationality', 'religion', 'pagibig_no', 'sss_no', 'gsis_no', 'tin_no', 'passport_no', 'passport_validity', 'passport_expiration_date', 'email', 'facebook', 'messenger', 'viber', 'other_social', 'residence_status', 'monthly_rental', 'years_of_stay', 'created_by', 'updated_by', 'created_at', 'updated_at', 'active'
    ];


    public function spouse(): HasOne
    {
        return $this->hasOne(Spouse::class);
    }

    public function employments(): HasMany
    {
        return $this->hasMany(Employment::class);
    }

    public function selfEmployments(): HasMany
    {
        return $this->hasMany(SelfEmployment::class);
    }

    public function dependents(): HasMany
    {
        return $this->hasMany(Dependent::class);
    }

    public function nonRelativeCharacterReferences(): HasMany
    {
        return $this->hasMany(NonRelativeCharacterReference::class);
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }

    public function inHouseProperties(): HasMany
    {
        return $this->hasMany(InHouseProperty::class);
    }

    // public function broker(): BelongsTo
    // {
    //     return $this->belongsTo(Broker::class);
    // }

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
