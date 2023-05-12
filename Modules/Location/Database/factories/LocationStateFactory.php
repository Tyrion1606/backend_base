<?php

namespace Modules\Location\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Location\Models\LocationState;


class LocationStateFactory extends Factory
{
    protected $model = LocationState::class;

    public function definition()
    {
        return [
            'name' => $this->faker->state,
            'uf' => $this->faker->unique()->stateAbbr,
            'ibge_code' => $this->faker->unique()->numberBetween(10000, 99999),
        ];
    }
}
