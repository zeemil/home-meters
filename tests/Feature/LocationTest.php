<?php

namespace Tests\Feature;

use App\Models\Location;
use App\Models\Meter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LocationTest extends TestCase
{

    use RefreshDatabase;

    /**
     * @test
     */
    public function it_creates_a_location(): void
    {
        $location = Location::factory()->create();

        $this->assertDatabaseHas('locations', $location->toArray());
    }

    /**
     * @test
     */
    public function it_creates_a_location_with_multiple_meters(): void
    {
        $location = Location::factory()
        ->has(Meter::factory()->count(3))
        ->create();

        $this->assertDatabaseHas('locations', $location->toArray());
        $this->assertDatabaseCount('meters', 3);
    }
}
