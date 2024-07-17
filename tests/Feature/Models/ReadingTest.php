<?php

namespace Tests\Feature\Models;

use App\Models\Location;
use App\Models\Meter;
use App\Models\Reading;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ReadingTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_it_creates_a_reading_for_a_meter(): void
    {
        
        Location::factory()
        ->has(
                Meter::factory()
                ->has(Reading::factory()->count(10)))
        ->create();
    
        $this->assertDatabaseCount('readings', 10);
    }
}
