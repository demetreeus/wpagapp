<?php

namespace App\Repositories;

use App\Models\Nationality;
use App\Repositories\BaseRepository;

/**
 * Class NationalityRepository
 * @package App\Repositories
 * @version June 7, 2020, 2:23 pm UTC
*/

class NationalityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Nationality::class;
    }
}
