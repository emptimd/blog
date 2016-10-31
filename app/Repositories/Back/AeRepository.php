<?php

namespace App\Repositories\Back;

use App\Models\Back\Ae;
use InfyOm\Generator\Common\BaseRepository;

class AeRepository extends BaseRepository
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
        return Ae::class;
    }
}
