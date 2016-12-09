<?php

namespace App\Models\Back;

use Eloquent as Model;

/**
 * Class Ti
 *
 * @package App\Models\Back
 * @version November 13, 2016, 12:48 am UTC
 * @property integer $id
 * @property string $name
 * @property string $desc
 * @property string $desc_ro
 * @property string $desc_en
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Ti whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Ti whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Ti whereDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Ti whereDescRo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Ti whereDescEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Ti whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Ti whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Ti extends Model
{

    public $table = 'tis';
    


    public $fillable = [
        'ff'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ff' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
