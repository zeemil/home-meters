<?php

namespace Tests\Feature\Views;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Location;
use App\Models\Meter;

class MetersIndexTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_meters_index_page(): void
    {

        Location::factory()
        ->has(Meter::factory())
        ->create();

        $response = $this->get('/location/1/meters');

        $response->assertStatus(200);
    }
}
