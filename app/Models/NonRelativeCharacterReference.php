<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NonRelativeCharacterReference extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'uuid', 'client_id', 'name', 'address', 'contact_no', 'created_by', 'updated_by', 'created_at', 'updated_at', 'active'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
