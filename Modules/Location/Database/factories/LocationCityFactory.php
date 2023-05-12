<?php

namespace Modules\Location\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Location\Entities\LocationCity;
use Modules\Location\Entities\LocationState;

class LocationCityFactory extends Factory
{
    protected $model = LocationCity::class;

    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'ibge_code' => $this->faker->unique()->numberBetween(1000000, 9999999),
            'state_id' => LocationState::factory(),
        ];
    }
}
