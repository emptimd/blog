<?php

namespace App\Repositories;

use App\Models\TestDatatablesBogdan;
use InfyOm\Generator\Common\BaseRepository;

class TestDatatablesBogdanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'path'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TestDatatablesBogdan::class;
    }
}
