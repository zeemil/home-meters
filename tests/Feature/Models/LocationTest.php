<?php

namespace Tests\Feature\Models;

use App\Models\Location;
use App\Models\Meter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class LocationTest extends TestCase
{

    use RefreshDatabase;

    #[Test]
    /** @test **/
    public function it_creates_a_location(): void
    {
        $location = Location::factory()->create();

        $this->assertDatabaseHas('locations', $location->toArray());
    }

    #[Test]
    public function it_creates_a_location_with_multiple_meters(): void
    {
        $location = Location::factory()
        ->has(Meter::factory()->count(3))
        ->create();

        $this->assertDatabaseHas('locations', $location->toArray());
        $this->assertDatabaseCount('meters', 3);
    }
}
