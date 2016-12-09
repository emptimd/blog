<?php

namespace App\Models\Back;

use Eloquent as Model;

/**
 * Class You
 *
 * @package App\Models\Back
 * @version October 24, 2016, 6:39 pm UTC
 * @property integer $id
 * @property integer $test
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property boolean $active
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\You whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\You whereTest($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\You whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\You whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\You whereActive($value)
 * @mixin \Eloquent
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
