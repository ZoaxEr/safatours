<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    //

    protected $table = 'settings';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'value',
    ];
}
