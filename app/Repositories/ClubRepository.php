<?php

namespace App\Repositories;

use App\Models\Club;
use App\Repositories\BaseRepository;

/**
 * Class ClubRepository
 * @package App\Repositories
 * @version June 7, 2020, 4:14 pm UTC
*/

class ClubRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'country_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Club::class;
    }
}
