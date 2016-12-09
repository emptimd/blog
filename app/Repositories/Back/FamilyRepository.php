<?php

namespace App\Repositories\Back;

use App\Models\Back\Family;
use InfyOm\Generator\Common\BaseRepository;

class FamilyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'desc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Family::class;
    }
}
