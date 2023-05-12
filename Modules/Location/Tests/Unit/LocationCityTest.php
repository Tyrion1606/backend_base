<?php

namespace Modules\Location\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Modules\Location\Models\LocationCity;
use modules\Location\Database\Factories\LocationCityFactory;

class LocationCityTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_all_cities()
    {
        LocationCity::factory()->count(3)->create();
        $response = $this->getJson('/api/location/cities');
        $response->assertStatus(200);
        $response->assertJsonCount(3);
    }

    public function test_find_city_by_name()
    {
        $city = LocationCity::factory()->create(['name' => 'São Paulo']);
        $response = $this->getJson('/api/location/cities/São Paulo');
        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'São Paulo']);
    }
}
