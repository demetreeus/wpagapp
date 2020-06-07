<?php

namespace App\Repositories;

use App\Models\PlayerPosition;
use App\Repositories\BaseRepository;

/**
 * Class PlayerPositionRepository
 * @package App\Repositories
 * @version June 7, 2020, 2:26 pm UTC
*/

class PlayerPositionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'player_id',
        'position_id'
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
        return PlayerPosition::class;
    }
}
