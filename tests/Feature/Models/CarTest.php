<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Car;

class CarTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_it_creates_a_car(): void
    {

        $car = Car::factory()->create();

        $this->assertDatabaseHas('cars', $car->toArray());
    }
}
