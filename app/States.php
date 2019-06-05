<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $table = 'states';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    // protected $fillable = [
    //     'states',
    // ];

    // public function states()
    // {
    //     return $this->belongsToMany('App\VehiclesHasStates', 'vehicles_has_states', 'vehicle_id', 'state_id');
    // }

}
