<?php

namespace App\Models\Back;

use App\Http\Controllers\ImageUploadTrait;
use Eloquent as Model;

/**
 * Class Ae
 * @package App\Models\Back
 * @version October 24, 2016, 9:45 pm UTC
 */
class Ae extends Model
{

    use ImageUploadTrait;

    public $table = 'aes';
    


    public $fillable = [
        'name',
        'path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'path' => 'image|mimes:png,jpeg'
    ];

    
}
