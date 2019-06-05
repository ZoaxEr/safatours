<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rents extends Model
{
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
}
