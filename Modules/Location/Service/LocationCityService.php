<?php

namespace Modules\Location\Service;

use Modules\Location\Entities\LocationCity;

class LocationCityService
{
    /**
     * Retorna todas as cidades.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return LocationCity::all();
    }

    /**
     * Encontra uma cidade com base no nome fornecido.
     *
     * @param string $name
     * @return \Modules\Location\Entities\LocationCity|null
     */
    public function find(string $name)
    {
        return LocationCity::where('name', $name)->first();
    }
}
