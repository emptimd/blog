<?php

namespace App\Models\Back;

use Eloquent as Model;

/**
 * Class ReffLevel
 *
 * @package App\Models\Back
 * @version January 8, 2017, 12:25 pm UTC
 * @mixin \Eloquent
 */
class ReffLevel extends Model
{

    public $table = 'reff_levels';
    public $timestamps = false;
    


    public $fillable = [
        'reff_level',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'reff_level' => 'required',
        'value' => 'required'
    ];

    
}
