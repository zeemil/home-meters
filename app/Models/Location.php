<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends BaseModel
{
    use HasFactory;

    public function meters(): HasMany
    {
        return $this->hasMany(Meter::class);
    }
}
