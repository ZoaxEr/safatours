<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Rent extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'rents';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'traceNumber',
        'renter_name',
        'renter_phone',
        'has_whatsapp',
        'renter_mail',
        'renter_nation',
        'pick_up_date',
        'pick_up_time',
        'drop_off_date',
        'drop_off_time',
        'pick_up_location',
        'drop_off_location',
        'has_driver',
        'driver_id',
        'renter_notes',
        'car_amount',
        'paid_amount',
        'remaining_amount',
        'insurance_amount',
        'HGS_amount',
        'confirmed',
        'cancelled',
        'reviewed',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function setreviewedAttribute()
    {
        $attribute_name = "reviewed";

        $this->attributes[$attribute_name] = 1;
    }

    public function setconfirmedAttribute($value)
    {
        if ($value == 1) {
            $this->attributes['cancelled'] = 0;
            $this->attributes['confirmed'] = 1;
        } else {
            $this->attributes['cancelled'] = 1;
            $this->attributes['confirmed'] = 0;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function driver()
    {
        return $this->belongsTo('App\Models\Driver');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
