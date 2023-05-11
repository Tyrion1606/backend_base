<?php

namespace Modules\Location\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Location\Entities\LocationCity;
use Modules\Location\Entities\LocationState;

class LocationCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $csvFile = "Modules/Location/Storage/ibge_cities.csv";
        $file = fopen($csvFile, 'r');

        // Ignorar a primeira linha (cabeçalho do CSV)
        fgetcsv($file);

        while (($line = fgetcsv($file)) !== false) {
            list($ibgeStateId, $cityName, $ibgeCityId) = $line;

            $state = LocationState::where('ibge_code', $ibgeStateId)->first();

            if ($state) {
                LocationCity::create([
                    'name' => $cityName,
                    'ibge_code' => $ibgeCityId,
                    'state_id' => $state->id,
                ]);
            }
        }

        fclose($file);
    }
}
