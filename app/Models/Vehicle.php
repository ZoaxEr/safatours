<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Backpack\CRUD\CrudTrait;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;

class Vehicle extends Model
{
    use CrudTrait;
    use HasTranslations;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'vehicles';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'traceNumber',
        'type',
        'slug',
        'PlateNumber',
        'mark' ,
        'model',
        'GPSNumber',
        'Thumbnail',
        'photos',
        'video',
        'AdultMax',
        'ChildMax',
        'KilometresTravelled',
        'engine',
        'gearbox',
        'features',
        'description',
        'outlay',
        'earnings',
        'status',
        'ownership',
        'oldDamages',
        'hide',
        'price',
    ];

    protected $casts = [
        'photos' => 'array',
        'features' => 'array',
    ];

    protected $translatable = [
        'features',
        'description',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    public function setThumbnailAttribute($value)
    {
        $attribute_name = "Thumbnail";
        $disk = "public_folder";
        $year = now()->year;
        $month = now()->month;
        $day = now()->day;
        $destination_path = "uploads/images/" .$year. "/" .$month. "/" .$day;

        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value)->encode('jpg', 90);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    }

    public function setvideoAttribute($value)
    {
        $attribute_name = "video";
        $disk = "public_folder";
        $year = now()->year;
        $month = now()->month;
        $day = now()->day;
        $destination_path = "uploads/videos/" .$year. "/" .$month. "/" .$day;

        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // $isVideo = Validator::make(array('Video' => $value), [
        //     'Video' => 'mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4',
        // ]);

            $filename = md5($value->getClientOriginalName().time()) . '.' . $value->getClientOriginalExtension();
            // 2. Store the image on disk.
            // \Storage::disk($disk)->put($destination_path.'/', $filename);
            $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
    }

    public function setphotosAttribute($values)
    {
        if (isset($values) && !empty($values) && $values[0] != null) {

        $attribute_name = "photos";
        $disk = "public_folder";
        $year = now()->year;
        $month = now()->month;
        $day = now()->day;
        $destination_path = "uploads/images/" .$year. "/" .$month. "/" .$day;
        $data = [];
        
        foreach ($values as $value) {
            if (starts_with($value->getMimeType(), 'image')) {
                $data[] = $value;
            }
        }

        $this->uploadMultipleFilesToDisk($data, $attribute_name, $disk, $destination_path);

        }
    }

    public function setslugAttribute()
    {
        $attribute_name = "slug";
        $vehicle_mark = $this->attributes['mark'];
        $vehicle_model = $this->attributes['model'];

        $vehicle_slug = new \App\vehicleSlug;
        $slug = $vehicle_slug->createSlug($vehicle_mark . ' ' . $vehicle_model);

        $this->attributes[$attribute_name] = $slug;
    }

    // public function setstates_idAttribute($value) {
    //     $this->attributes['states_id'] = serialize($value);
    // }

    public static function boot()
    {
        parent::boot();
        self::deleting(function($obj) {
            \Storage::disk('public_folder')->delete($obj->Thumbnail);
            if (count((array)$obj->photos)) {
                foreach ($obj->photos as $file_path) {
                    \Storage::disk('public_folder')->delete($file_path);
                }
            }
        });
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function states()
    {
        return $this->belongsToMany('App\Models\Vehicle', 'vehicles_has_states', 'vehicle_id', 'state_id')->withTimestamps();
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
