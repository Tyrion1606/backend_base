<?php

namespace Modules\Location\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Location\Database\Factories\LocationCityFactory;

class LocationCity extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'location_cities';
    protected $fillable = ['name', 'ibge_code', 'state_id'];
    protected $with = ['state'];

    protected static function newFactory()
    {
        return LocationCityFactory::new();
    }

    public function state()
    {
        return $this->belongsTo(LocationState::class, 'state_id');
    }
}
