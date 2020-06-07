<?php

namespace App\Repositories;

use App\Models\PlayerLanguage;
use App\Repositories\BaseRepository;

/**
 * Class PlayerLanguageRepository
 * @package App\Repositories
 * @version June 7, 2020, 2:27 pm UTC
*/

class PlayerLanguageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'player_id',
        'language_id'
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
        return PlayerLanguage::class;
    }
}
