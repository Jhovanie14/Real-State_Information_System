<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'client_id',
        'broker_id',
        'hdmf_loan_property_id',
        'in_house_property_id',
        'hdmf_loan_payment_schedules_id',
        'in_house_payment_schedules_id',
        'notification_type',
        'viewed',
        'viewed_at',
        'deleted_at',
        'active',
    ];
}
