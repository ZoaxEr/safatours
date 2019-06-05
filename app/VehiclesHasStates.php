<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiclesHasStates extends Model
{
    protected $table = 'vehicles_has_states';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'state_id',
        'vehicle_id',
    ];

    public function states()
    {
        return $this->belongsToMany('App\Models\Vehicle', 'vehicles_has_states', 'vehicle_id', 'state_id')->withTimestamps();
    }

}
