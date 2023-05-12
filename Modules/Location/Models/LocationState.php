<?php

namespace Modules\Location\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Location\Database\Factories\LocationStateFactory;


class LocationState extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'location_states';
    protected $fillable = ['name', 'uf'];

    protected static function newFactory()
    {
        return LocationStateFactory::new();
    }

    public function cities()
    {
        return $this->hasMany(LocationCity::class, 'state_id');
    }
}
