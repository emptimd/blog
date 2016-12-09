<?php

namespace App\Repositories\Back;

use App\Models\Back\hh;
use InfyOm\Generator\Common\BaseRepository;

class hhRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'gg'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return hh::class;
    }
}
