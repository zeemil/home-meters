<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'chassis_number',
        'license_plate',
        'license_plate_country',
        'initial_entry_into_service',
        'engine_power',
        'engine_power_unit',
        'fuel_type',
        'tire_dimension',
    ];
}
