<?php

namespace App\Repositories;

use App\Models\Project;
use InfyOm\Generator\Common\BaseRepository;

class ProjectRepository extends BaseRepository
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
        return Project::class;
    }
}
