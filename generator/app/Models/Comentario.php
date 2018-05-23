<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comentario
 * @package App\Models
 * @version May 11, 2018, 12:00 am UTC
 *
 * @property integer cliente_id
 * @property string comentario
 */
class Comentario extends Model
{
    use SoftDeletes;

    public $table = 'comentarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cliente_id',
        'comentario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cliente_id' => 'integer',
        'comentario' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cliente_id' => 'required',
        'comentario' => 'required'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

}
