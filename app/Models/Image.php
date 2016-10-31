<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Image
 *
 * @package App\Models
 * @version October 18, 2016, 10:15 am UTC
 * @property integer $id
 * @property string $title
 * @property string $path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Image whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Image whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Image wherePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Image whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Image extends Model
{

    public $table = 'images';
    


    public $fillable = [
        'title',
        'path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'path' => 'image|mimes:png,jpeg'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    
}
