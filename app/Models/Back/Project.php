<?php

namespace App\Models\Back;

use Eloquent as Model;

/**
 * Class Project
 * @package App\Models\Back
 * @version October 24, 2016, 2:42 pm UTC
 */
class Project extends Model
{

    public $table = 'projects';
    


    public $fillable = [
        'title',
        'dd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'dd' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'dd' => 'required'
    ];

    
}
