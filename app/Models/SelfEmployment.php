<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SelfEmployment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'uuid', 'client_id', 'nature_of_business', 'position', 'years_of_operation', 'business_name', 'business_address', 'business_email', 'contact_no', 'monthly_gross_pay', 'tin_no', 'sss_no', 'pagibig_no', 'other_income', 'created_by', 'updated_by', 'created_at', 'updated_at', 'active'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
