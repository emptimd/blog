<?php

namespace App\Models\Back;

use Eloquent as Model;

/**
 * Class hh
 *
 * @package App\Models\Back
 * @version November 1, 2016, 6:08 pm UTC
 * @mixin \Eloquent
 */
class hh extends Model
{

    public $table = 'hhs';
    


    public $fillable = [
        'gg'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'gg' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
