<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'emp_id',
         'emp_uuid',
         'acc_id',
         'emp_email',
         'emp_password',
         'emp_last_name',
         'emp_first_name',
         'emp_middle_name',
         'emp_ext_name',
         'emp_date_of_birth',
         'emp_place_of_birth',
         'emp_gender',
         'emp_address',
         'emp_mobile',
         'emp_image',
          'pos_id',
         'emp_created_by',
         'emp_updated_by',
         'created_at',
         'updated_at',
         'emp_active'
    ];

    public function notifications(): HasMany{
        return $this->hasMany(Notification::class);
    }
}
