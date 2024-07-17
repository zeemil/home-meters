<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{

    /**
     * Prepare a date for array / JSON serialization.
     * note: introduced to be able to run tests in memory
     * @see https://laravel.com/docs/11.x/eloquent-mutators#date-casting
     */
    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
