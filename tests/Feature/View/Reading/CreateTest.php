<?php

namespace Tests\Feature\View\Reading;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Location;
use App\Models\Meter;

class CreateTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic view test example.
     */
    public function test_it_can_render(): void
    {
        $meter = Meter::factory()->create();

        $contents = $this->view('reading.create', [
            'meter' => $meter
        ]);

        $contents->assertSee('');
    }

    public function test_the_route_is_working(): void
    {
        Location::factory()
        ->has(Meter::factory())
        ->create();
        $response = $this->get('/meters/1/readings/create');
        $response->assertStatus(200);
    }
}
