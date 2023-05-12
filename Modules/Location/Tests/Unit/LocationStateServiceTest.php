<?php

namespace Tests\Unit;

use Modules\Location\Service\LocationStateService;
use Modules\Location\Models\LocationState;
use Modules\Location\Models\LocationCity;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LocationStateServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_all_states()
    {
        $states = LocationState::factory()->count(5)->create();

        $service = new LocationStateService();
        $allStates = $service->getAll();

        $this->assertCount(5, $allStates);
    }

    public function test_find_state_by_uf()
    {
        $state = LocationState::factory()->create([
            'uf' => 'AM'
        ]);

        $service = new LocationStateService();
        $foundState = $service->find('AM');

        $this->assertEquals('AM', $foundState->uf);
    }

    public function test_get_cities_from_state()
    {
        $state = LocationState::factory()
            ->has(LocationCity::factory()->count(3), 'cities')
            ->create([
                'uf' => 'AM'
            ]);

        $service = new LocationStateService();
        $cities = $service->getCitiesFromState('AM');

        $this->assertCount(3, $cities);
    }
}
