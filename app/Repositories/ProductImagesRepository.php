<?php

namespace App\Repositories;

use App\Models\ProductImages;
use InfyOm\Generator\Common\BaseRepository;

class ProductImagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'path'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductImages::class;
    }
}
