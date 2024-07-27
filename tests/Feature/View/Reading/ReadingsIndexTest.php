<?php

namespace Tests\Feature\View\Reading;

use App\Models\Location;
use App\Models\Meter;
use App\Models\Reading;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReadingsIndexTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_render(): void
    {
        $location = Location::factory()
        ->has(
            Meter::factory()
            ->has(Reading::factory()->count(10))
        )
        ->create();


        $contents = $this->view('reading.index', [
            'meter' => $location->meters[0]
        ]);

        $contents->assertSee($location->meters[0]->ean_code);
    }

    public function test_the_route_is_working(): void
    {
        $location = Location::factory()
        ->has(
            Meter::factory()
            ->has(Reading::factory()->count(10))
        )
        ->create();

        $response = $this->get('/meters/1/readings');

        $response->assertStatus(200);
        $response->assertSee('Readings for meter : ');
    }
}
