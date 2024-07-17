<?php

namespace Tests\Feature\Views;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class LocationsIndexTest extends TestCase
{
    use RefreshDatabase;
    
   #[Test]
    public function test_it_displays_locations(): void
    {
        $response = $this->get('/locations');
        $response->assertStatus(200);
        $response->assertSee('Locations');
    }

    public function test_it_displays_add_location_if_the_list_is_empty():void
    {
        $response = $this->get('/locations');
        $response->assertSee('add location');
    }

    public function test_it_displays_locations_details():void
    {
        $location = Location::factory()->create();
        $response = $this->get('/locations');
        $response->assertSee($location->street);
    }

    
}
