<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Location\Service\LocationCityService;
use Modules\Location\Service\LocationStateService;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/location', function (Request $request) {
    return $request->user();
});

Route::prefix('location')->group(function () {
    Route::get('/states', function (LocationStateService $locationStateService) {
        return response()->json($locationStateService->getAll());
    });

    Route::get('/states/{uf}', function ($uf, LocationStateService $locationStateService) {
        $state = $locationStateService->find($uf);
        if ($state) {
            return response()->json($state);
        }
        return response()->json(['message' => 'State not found'], 404);
    });

    Route::get('/states/{uf}/cities', function ($uf, LocationStateService $locationStateService) {
        $cities = $locationStateService->getCitiesFromState($uf);
        if ($cities) {
            return response()->json($cities);
        }
        return response()->json(['message' => 'State not found'], 404);
    });

    Route::get('/cities', function (LocationCityService $locationCityService) {
        return response()->json($locationCityService->getAll());
    });

    Route::get('/cities/{name}', function ($name, LocationCityService $locationCityService) {
        $city = $locationCityService->find($name);
        if ($city) {
            return response()->json($city);
        }
        return response()->json(['message' => 'City not found'], 404);
    });
});


