<?php

namespace App\Repositories\Back;

use App\Models\Back\Referral;
use InfyOm\Generator\Common\BaseRepository;

class ReferralRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'refferal_id',
        'reff_level'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Referral::class;
    }
}
