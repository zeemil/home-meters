<?php

namespace Tests\Feature\View\Meter;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Location;
use App\Models\Meter;

class MetersIndexTest extends TestCase
{
    use RefreshDatabase;

    public function test_meters_index(): void
    {

        Location::factory()
        ->has(Meter::factory())
        ->create();

        $response = $this->get('/location/1/meters');

        $response->assertStatus(200);
        $response->assertSee('Meters for location :');
    }
}
