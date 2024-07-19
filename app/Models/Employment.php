<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'uuid', 'client_id', 'occupation', 'position', 'length_of_employment', 'employer_name', 'contact_no', 'employer_business_address', 'employer_email', 'monthly_gross_pay', 'other_income', 'created_by', 'updated_by', 'created_at', 'updated_at', 'active'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
