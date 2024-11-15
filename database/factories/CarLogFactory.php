<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarLog>
 */
class CarLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->dateTimeThisMonth(),
            'mileage' => fake()->numberBetween('1','500000'),
            'price' => fake()->randomFloat(2),
            'supplier' => null,
            'note' => fake()->paragraph(2),
            'fuel_quantity' => fake()->numberBetween('10','100'),
            'is_partial_refueling' => fake()->boolean(),
            'price_per_volume' => fake()->randomFloat(2)
        ];
    }
}
