<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlayerPosition
 * @package App\Models
 * @version June 7, 2020, 2:26 pm UTC
 *
 * @property integer $player_id
 * @property integer $position_id
 */
class PlayerPosition extends Model
{
    use SoftDeletes;

    public $table = 'player_positions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'player_id',
        'position_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'player_id' => 'integer',
        'position_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'player_id' => 'required',
        'position_id' => 'required'
    ];

    
}
