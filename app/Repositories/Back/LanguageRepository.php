<?php

namespace App\Repositories\Back;

use App\Models\Back\Language;
use InfyOm\Generator\Common\BaseRepository;

class LanguageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'language',
        'country',
        'name',
        'name_ascii',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Language::class;
    }
}
