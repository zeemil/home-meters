<?php

namespace Tests\Feature\Models;

use App\Models\Car;
use App\Models\CarLog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CarLogTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_a_car_has_many_car_logs(): void
    {
        $car = Car::factory()
        ->has(CarLog::factory()->count(10))
        ->create();

        $this->assertDatabaseHas('cars', $car->toArray());

        $this->assertDatabaseCount('car_logs', 10);
    }
}
