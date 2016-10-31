<?php

namespace App\Models\Back;

use Eloquent as Model;

/**
 * Class You
 * @package App\Models\Back
 * @version October 24, 2016, 6:39 pm UTC
 */
class You extends Model
{

    public $table = 'yous';
    


    public $fillable = [
        'test'
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
        
    ];

    
}
