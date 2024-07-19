<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Spouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'uuid', 'client_id', 'last_name', 'first_name', 'middle_name', 'suffix', 'occupation', 'department', 'length_of_employment', 'employer_name', 'employer_contact_no', 'employer_business_address', 'employer_email', 'gross_pay', 'other_income', 'tin_no', 'hdmf_no', 'sss_no', 'gsis_no', 'passport_no', 'facebook', 'contact_no', 'image', 'created_by', 'updated_by', 'created_at', 'updated_at', 'active'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
