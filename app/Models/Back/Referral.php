<?php

namespace App\Models\Back;

use Eloquent as Model;

/**
 * Class Referral
 *
 * @package App\Models\Back
 * @version January 7, 2017, 11:59 am UTC
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $user_id
 * @property integer $refferal_id
 * @property boolean $reff_level
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Referral whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Referral whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Referral whereRefferalId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Referral whereReffLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Referral whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Referral whereUpdatedAt($value)
 */
class Referral extends Model
{

    public $table = 'referrals';
    


    public $fillable = [
        'user_id',
        'refferal_id',
        'reff_level'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'string',
        'refferal_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'refferal_id' => 'required'
    ];

    
}
