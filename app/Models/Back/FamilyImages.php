<?php

namespace App\Models\Back;

use App\Http\Controllers\ImageUploadTrait;
use Eloquent as Model;

/**
 * Class FamilyImages
 *
 * @package App\Models\Back
 * @version November 1, 2016, 6:06 pm UTC
 * @property integer $id
 * @property integer $family_id
 * @property string $path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\FamilyImages whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\FamilyImages whereFamilyId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\FamilyImages wherePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\FamilyImages whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\FamilyImages whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Back\Family $product
 */
class FamilyImages extends Model
{

    use ImageUploadTrait;
    public $table = 'family_images';
    


    public $fillable = [
        'family_id',
        'path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'family_id' => 'integer',
        'path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'path' => 'image|mimes:png,jpeg'
    ];

    public function product()
    {
        return $this->belongsTo(\App\Models\Back\Family::class);
    }

    
}
