<?php

namespace App\Models\Back;

use Eloquent as Model;


/**
 * App\Models\Back\Project
 *
 * @property integer $id
 * @property string $tit
 * @property string $des
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Project whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Project whereTit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Project whereDes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Project whereUpdatedAt($value)
 * @mixin \Eloquent
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
