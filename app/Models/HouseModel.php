<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HouseModel extends Model
{
    use HasFactory;

    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function reservations(): BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }
}
