<?php

namespace App\Models\Back;

use App\Http\Controllers\ImageUploadTrait;
use Eloquent as Model;

/**
 * Class Family
 *
 * @package App\Models\Back
 * @version November 1, 2016, 6:04 pm UTC
 * @property integer $id
 * @property string $title
 * @property string $desc
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Family whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Family whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Family whereDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Family whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\Family whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Back\FamilyImages[] $images
 */
class Family extends Model
{

    use ImageUploadTrait;

    public $table = 'families';
    


    public $fillable = [
        'title',
        'desc',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'desc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'desc' => 'required',
//        'path' => 'required',
        'path.*' => 'image|mimes:png,jpeg',
    ];



    public function images()
    {
        return $this->hasMany(\App\Models\Back\FamilyImages::class);
    }
    
}
