<?php

namespace Tests\Feature\Views;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LocationCreateTest extends TestCase
{
    public function test_route_to_locations_create(): void
    {
        $response = $this->get('/locations/create');

        $response->assertStatus(200);
    }
}
