<?php

namespace Tests\Feature\Views;

use App\Models\Location;
use App\Models\Meter;
use App\Models\Reading;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReadingsIndexTest extends TestCase
{
    use RefreshDatabase;
  
    public function test_reading_index(): void
    {
        $location = Location::factory()
        ->has(
                Meter::factory()
                ->has(Reading::factory()->count(10)))
        ->create();

        $response = $this->get('/meters/1/readings');

        $response->assertStatus(200);
        $response->assertSee('Readings for meter : ');
    }
}
