<?php

namespace App\Repositories\Back;

use App\Models\Back\FamilyImages;
use InfyOm\Generator\Common\BaseRepository;

class FamilyImagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'family_id',
        'path'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FamilyImages::class;
    }
}
