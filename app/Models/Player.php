<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Storage;

/**
 * Class Player
 * @package App\Models
 * @version May 31, 2020, 12:36 pm UTC
 *
 * @property string $fname
 * @property string $lname
 * @property string $dob
 * @property string $nationality
 * @property string $preferred_hand
 * @property string $status
 * @property integer $physical_acceleration
 * @property integer $physical_pace
 * @property integer $physical_power
 * @property integer $physical_leg_power
 * @property integer $physical_shooting_power
 * @property integer $physical_flexibility
 * @property integer $technical_ball_handling
 * @property integer $technical_ball_reception
 * @property integer $technical_passing_accuracy
 * @property integer $technical_shooting_accuracy
 * @property integer $technical_blocking
 * @property integer $technical_swimming_technique
 * @property integer $tamperament_anticipation
 * @property integer $tamperament_concentration
 * @property integer $tamperament_flair
 * @property integer $tamperament_bravery
 * @property integer $tamperament_leadership
 * @property integer $tamperament_consistency
 * @property integer $height
 * @property integer $weight
 */
class Player extends Model
{
    use SoftDeletes;

    public $table = 'players';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'photo_path',
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'photo_path' => 'string',
        'fname' => 'string',
        'lname' => 'string',
        'dob' => 'string',
        'nationality' => 'string',
        'preferred_hand' => 'string',
        'status' => 'string',
        'physical_acceleration' => 'integer',
        'physical_pace' => 'integer',
        'physical_power' => 'integer',
        'physical_leg_power' => 'integer',
        'physical_shooting_power' => 'integer',
        'physical_flexibility' => 'integer',
        'technical_ball_handling' => 'integer',
        'technical_ball_reception' => 'integer',
        'technical_passing_accuracy' => 'integer',
        'technical_shooting_accuracy' => 'integer',
        'technical_blocking' => 'integer',
        'technical_swimming_technique' => 'integer',
        'tamperament_anticipation' => 'integer',
        'tamperament_concentration' => 'integer',
        'tamperament_flair' => 'integer',
        'tamperament_bravery' => 'integer',
        'tamperament_leadership' => 'integer',
        'tamperament_consistency' => 'integer',
        'height' => 'integer',
        'weight' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fname' => 'required',
        'lname' => 'required',
    ];

    public function positions()
    {
        return $this->belongsToMany('App\Models\Position', 'player_positions');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Models\Language', 'player_languages');
    }

    public function getPositionAttribute()
    {
        $position = '';

        $positions = $this->positions()->get();

        if(!empty($positions)){
            foreach ($positions as $pos) {
                $position.= $pos->name.', ';
            }
            $position = substr($position, 0, -2);
        }

        return $position;
    }

    public function getLanguageAttribute()
    {
        $language = '';

        $languages = $this->languages()->get();

        if(!empty($languages)){
            foreach ($languages as $lang) {
                $language.= $lang->name.', ';
            }
            $language = substr($language, 0, -2);
        }

        return $language;
    }

    public function getPhotoAttribute() {
        return asset(Storage::url($this->photo_path));
    }
}
