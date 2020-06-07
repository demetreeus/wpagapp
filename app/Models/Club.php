<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Club
 * @package App\Models
 * @version June 7, 2020, 4:14 pm UTC
 *
 * @property string $name
 * @property integer $country_id
 */
class Club extends Model
{
    use SoftDeletes;

    public $table = 'clubs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'country_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'country_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'country_id' => 'required'
    ];

    
}
