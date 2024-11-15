<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'manufacturer' => fake()->randomElement(['Opel','Toyota', 'Ford', 'VW', 'BMW', 'Subaru','Hundai']) ,
            'model' => fake()->randomElement(['Auris','Zafira','Avensis','EC40','Amarok', 'Polo', 'Golf', 'Berlingo']),
            'chassis_number' => 'WECD12345',
            'license_plate' => '1-ABC-234',
            'license_plate_country' => 'Belgium',
            'initial_entry_into_service' => '2013-01-01',
            'engine_power' => '81',
            'engine_power_unit' => 'cv',
            'fuel_type' => 'diesel',
            'tire_dimension' => '205/55 R16'
        ];
    }
}
