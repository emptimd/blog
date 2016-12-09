<?php

namespace App\Repositories\Back;

use App\Models\Back\Ti;
use InfyOm\Generator\Common\BaseRepository;

class TiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ff'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ti::class;
    }
}
