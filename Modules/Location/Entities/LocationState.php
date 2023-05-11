<?php

namespace Modules\Location\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationState extends Model
{
    use SoftDeletes;

    protected $table = 'location_states';
    protected $fillable = ['name', 'abbreviation'];

    public function cities()
    {
        return $this->hasMany(LocationCity::class, 'state_id');
    }
}
