<?php

namespace App\Models\Back;

use App\Http\Controllers\ImageUploadTrait;
use Eloquent as Model;
use Illuminate\Validation\Rule;

/**
 * Class Ae
 *
 * @package App\Models\Back
 * @version October 24, 2016, 9:45 pm UTC
 * @property integer $id
 * @property string $name
 * @property string $path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Ae whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Ae whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Ae wherePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Ae whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Ae whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Ae extends Model
{

    use ImageUploadTrait;

    public $table = 'aes';
    


    public $fillable = [
        'name',
        'path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => ['required', 'between:2,5', 'regex:/^([a-z]{2}[_-][A-Z]{2}|[a-z]{2})$/'],
        'path' => 'required|image|mimes:png,jpeg',
    ];

    public static $rules2 = [
        'name' => 'required',
        'path' => 'image|mimes:png,jpeg',
    ];

}
