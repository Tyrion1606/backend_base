<?php

namespace Modules\Location\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Modules\Location\Models\LocationState;

class LocationStateTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_all_states()
    {
        LocationState::factory()->count(3)->create();
        $response = $this->getJson('/api/location/states');
        $response->assertStatus(200);
        $response->assertJsonCount(3);
    }

    public function test_find_state_by_uf()
    {
        $state = LocationState::factory()->create(['uf' => 'SP']);
        $response = $this->getJson('/api/location/states/SP');
        $response->assertStatus(200);
        $response->assertJsonFragment(['uf' => 'SP']);
    }

    public function test_get_cities_from_state()
    {
        $state = LocationState::factory()->hasCities(3)->create(['uf' => 'SP']);
        $response = $this->getJson('/api/location/states/SP/cities');
        $response->assertStatus(200);
        $response->assertJsonCount(3);
    }
}
