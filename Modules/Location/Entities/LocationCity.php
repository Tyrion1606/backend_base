<?php

namespace Modules\Location\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationCity extends Model
{
    use SoftDeletes;

    protected $table = 'location_cities';
    protected $fillable = ['name', 'ibge_code', 'state_id'];

    public function state()
    {
        return $this->belongsTo(LocationState::class, 'state_id');
    }
}
