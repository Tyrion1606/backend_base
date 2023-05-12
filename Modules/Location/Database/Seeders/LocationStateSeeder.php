<?php

namespace Modules\Location\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Location\Models\LocationState;

class LocationStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserir dados na tabela location_states
        $states = [
            ['id' => 1, 'name' => 'Acre', 'uf' => 'AC', 'ibge_code' => 12],
            ['id' => 2, 'name' => 'Alagoas', 'uf' => 'AL', 'ibge_code' => 27],
            ['id' => 3, 'name' => 'Amapá', 'uf' => 'AP', 'ibge_code' => 16],
            ['id' => 4, 'name' => 'Amazonas', 'uf' => 'AM', 'ibge_code' => 13],
            ['id' => 5, 'name' => 'Bahia', 'uf' => 'BA', 'ibge_code' => 29],
            ['id' => 6, 'name' => 'Ceará', 'uf' => 'CE', 'ibge_code' => 23],
            ['id' => 7, 'name' => 'Espírito Santo', 'uf' => 'ES', 'ibge_code' => 32],
            ['id' => 8, 'name' => 'Goiás', 'uf' => 'GO', 'ibge_code' => 52],
            ['id' => 9, 'name' => 'Maranhão', 'uf' => 'MA', 'ibge_code' => 21],
            ['id' => 10, 'name' => 'Mato Grosso', 'uf' => 'MT', 'ibge_code' => 51],
            ['id' => 11, 'name' => 'Mato Grosso do Sul', 'uf' => 'MS', 'ibge_code' => 50],
            ['id' => 12, 'name' => 'Minas Gerais', 'uf' => 'MG', 'ibge_code' => 31],
            ['id' => 13, 'name' => 'Pará', 'uf' => 'PA', 'ibge_code' => 15],
            ['id' => 14, 'name' => 'Paraíba', 'uf' => 'PB', 'ibge_code' => 25],
            ['id' => 15, 'name' => 'Paraná', 'uf' => 'PR', 'ibge_code' => 41],
            ['id' => 16, 'name' => 'Pernambuco', 'uf' => 'PE', 'ibge_code' => 26],
            ['id' => 17, 'name' => 'Piauí', 'uf' => 'PI', 'ibge_code' => 22],
            ['id' => 18, 'name' => 'Rio de Janeiro', 'uf' => 'RJ', 'ibge_code' => 33],
            ['id' => 19, 'name' => 'Rio Grande do Norte', 'uf' => 'RN', 'ibge_code' => 24],
            ['id' => 20, 'name' => 'Rio Grande do Sul', 'uf' => 'RS', 'ibge_code' => 43],
            ['id' => 21, 'name' => 'Rondônia', 'uf' => 'RO', 'ibge_code' => 11],
            ['id' => 22, 'name' => 'Roraima', 'uf' => 'RR', 'ibge_code' => 14],
            ['id' => 23, 'name' => 'Santa Catarina', 'uf' => 'SC', 'ibge_code' => 42],
            ['id' => 24, 'name' => 'São Paulo', 'uf' => 'SP', 'ibge_code' => 35],
            ['id' => 25, 'name' => 'Sergipe', 'uf' => 'SE', 'ibge_code' => 28],
            ['id' => 26, 'name' => 'Tocantins', 'uf' => 'TO', 'ibge_code' => 17],
            ['id' => 27, 'name' => 'Distrito Federal', 'uf' => 'DF', 'ibge_code' => 53],
        ];

        foreach ($states as $state) {
            LocationState::create($state);
        }
    }
}
