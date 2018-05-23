<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tarea
 * @package App\Models
 * @version May 22, 2018, 11:43 pm UTC
 *
 * @property string name
 * @property string category
 */
class Tarea extends Model
{
    use SoftDeletes;

    public $table = 'tareas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'category'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'category' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
