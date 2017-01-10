<?php

namespace App\Repositories\Back;

use App\Models\Back\ReffLevel;
use InfyOm\Generator\Common\BaseRepository;

class ReffLevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'reff_level',
        'value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ReffLevel::class;
    }
}
