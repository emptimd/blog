<?php

namespace App\Models\Back;

use Eloquent as Model;

/**
 * Class News
 *
 * @package App\Models\Back
 * @version November 12, 2016, 4:14 pm UTC
 * @property integer $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\News whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\News whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\News whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class News extends Model
{

    public $table = 'news';
    


    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    
}
