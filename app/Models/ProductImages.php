<?php

namespace App\Models;

use App\Http\Controllers\ImageUploadTrait;
use Eloquent as Model;

/**
 * Class ProductImages
 *
 * @package App\Models
 * @version October 14, 2016, 3:38 pm UTC
 * @property integer $id
 * @property integer $product_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ProductImages whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ProductImages whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ProductImages whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ProductImages whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $path
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ProductImages wherePath($value)
 */
class ProductImages extends Model
{

    use ImageUploadTrait;

    public $table = 'product_images';
    


    public $fillable = [
        'product_id',
        'path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required',
        'path' => 'image|mimes:png,jpeg'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class);
    }
}
