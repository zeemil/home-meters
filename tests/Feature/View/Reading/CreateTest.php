<?php

namespace Tests\Feature\View\Reading;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Location;
use App\Models\Meter;

class CreateTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_route_is_working(): void
    {
        Location::factory()
        ->has(Meter::factory())
        ->create();
        
        $this->get('/meters/1/readings/create')
        ->assertStatus(200)
        ->assertSee('Add a reading for meter');
    }

    public function test_it_validates_the_data(): void
    {
        Location::factory()
        ->has(Meter::factory())
        ->create();

        $readingData = [
            'value' => 'a123',
            'date' => 'abc',
            'isOfficial' => 0
        ];

        $this->post('meters/1/readings', $readingData)
        ->assertSessionHasErrors('date')
        ->assertSessionHasErrors('value')
        ->assertStatus(302);
    }

    public function test_it_stores_the_data(): void
    {
        Location::factory()
        ->has(Meter::factory())
        ->create();

        $readingData = [
            'value' => 123,
            'date' => '2024-01-01',
            'isOfficial' => 0
        ];

        $this->post('meters/1/readings', $readingData)
        ->assertSessionDoesntHaveErrors();
        $this->assertDatabaseHas('readings', $readingData);
    }

    public function test_it_redirects_to_readings_index(): void
    {
        Location::factory()
        ->has(Meter::factory())
        ->create();

        $readingData = [
            'value' => 123,
            'date' => '2024-01-01',
            'isOfficial' => 0
        ];

        $this->post('meters/1/readings', $readingData)
        ->assertRedirect(
            route('readings.index', ['meter' => 1])
        );
    }
}
