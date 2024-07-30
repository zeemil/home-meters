<?php

namespace Tests\Feature\View\Reading;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Location;
use App\Models\Meter;
use App\Models\Reading;

class DeleteReadingTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_delete_reading_route(): void
    {
        
        $location = Location::factory()
        ->has(
            Meter::factory()
            ->has(Reading::factory()->count(10))
        )
        ->create();
        $this->assertDatabaseCount('readings', 10);

        $this->delete('/meters/1/readings/1')
        ->assertRedirect('/meters/1/readings');

        $this->assertDatabaseCount('readings', 9);
    }
}
