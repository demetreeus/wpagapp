<?php

namespace App\Repositories;

use App\Models\Player;
use App\Repositories\BaseRepository;

/**
 * Class PlayerRepository
 * @package App\Repositories
 * @version May 31, 2020, 12:36 pm UTC
*/

class PlayerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fname',
        'lname',
        'dob',
        'nationality',
        'preferred_hand',
        'status',
        'physical_acceleration',
        'physical_pace',
        'physical_power',
        'physical_leg_power',
        'physical_shooting_power',
        'physical_flexibility',
        'technical_ball_handling',
        'technical_ball_reception',
        'technical_passing_accuracy',
        'technical_shooting_accuracy',
        'technical_blocking',
        'technical_swimming_technique',
        'tamperament_anticipation',
        'tamperament_concentration',
        'tamperament_flair',
        'tamperament_bravery',
        'tamperament_leadership',
        'tamperament_consistency',
        'height',
        'weight'
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
        return Player::class;
    }
}
