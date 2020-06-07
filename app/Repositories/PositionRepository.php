<?php

namespace App\Repositories;

use App\Models\Position;
use App\Repositories\BaseRepository;

/**
 * Class PositionRepository
 * @package App\Repositories
 * @version June 7, 2020, 2:21 pm UTC
*/

class PositionRepository extends BaseRepository
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
        return Position::class;
    }
}
