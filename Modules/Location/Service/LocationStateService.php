<?php

namespace Modules\Location\Service;

use Modules\Location\Models\LocationState;

class LocationStateService
{
    /**
     * Retorna todos os estados.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return LocationState::all();
    }

    /**
     * Encontra um estado com base na UF fornecida.
     *
     * @param string $uf
     * @return \Modules\Location\Models\LocationState|null
     */
    public function find(string $uf)
    {
        return LocationState::where('uf', $uf)->firstOrFail();
    }

    /**
     * Retorna todas as cidades pertencentes ao estado com a UF fornecida.
     *
     * @param string $uf
     * @return \Illuminate\Database\Eloquent\Collection|null
     */
    public function getCitiesFromState(string $uf)
    {
        $state = $this->find($uf);
        if (!$state) {
            return null;
          }
        return $state->cities;
    }
}
