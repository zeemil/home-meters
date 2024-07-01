<?php

namespace Tests\Feature\Views;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class WelcomeViewTest extends TestCase
{
   #[Test]
    public function test_it_displays_locations(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertSee('Locations');
    }
}
