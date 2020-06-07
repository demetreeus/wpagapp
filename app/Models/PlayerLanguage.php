<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlayerLanguage
 * @package App\Models
 * @version June 7, 2020, 2:27 pm UTC
 *
 * @property integer $player_id
 * @property integer $language_id
 */
class PlayerLanguage extends Model
{
    use SoftDeletes;

    public $table = 'player_languages';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'player_id',
        'language_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'player_id' => 'integer',
        'language_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'player_id' => 'required',
        'language_id' => 'required'
    ];

    
}
