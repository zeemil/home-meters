<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reading extends BaseModel
{
    use HasFactory;

    public $timestamps = false;

    public function meter(): BelongsTo
    {
        return $this->belongsTo(Meter::class);
    }
}
