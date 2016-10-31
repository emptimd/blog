<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TestDatatablesBogdan
 *
 * @package App\Models
 * @version October 19, 2016, 9:58 am UTC
 * @property integer $id
 * @property string $name
 * @property string $path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TestDatatablesBogdan whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TestDatatablesBogdan whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TestDatatablesBogdan wherePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TestDatatablesBogdan whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TestDatatablesBogdan whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TestDatatablesBogdan extends Model
{

    public $table = 'test_datatables_bogdans';
    


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
        'name' => 'required',
        'path' => 'image'
    ];

    
}
