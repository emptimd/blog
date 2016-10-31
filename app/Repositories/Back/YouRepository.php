<?php

namespace App\Repositories\Back;

use App\Models\Back\You;
use InfyOm\Generator\Common\BaseRepository;

class YouRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'test'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return You::class;
    }
}
