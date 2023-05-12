<?php

namespace Tests\Unit;

use Modules\Location\Service\LocationCityService;
use Modules\Location\Models\LocationCity;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LocationCityServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_all_cities()
    {
        $cities = LocationCity::factory()->count(5)->create();

        $service = new LocationCityService();
        $allCities = $service->getAll();

        $this->assertCount(5, $allCities);
    }

    public function test_find_city_by_name()
    {
        $city = LocationCity::factory()->create([
            'name' => 'Test City'
        ]);

        $service = new LocationCityService();
        $foundCity = $service->find('Test City');

        $this->assertEquals('Test City', $foundCity->name);
    }
}
