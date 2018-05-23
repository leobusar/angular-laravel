<?php

namespace App\Repositories;

use App\Models\Comentario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ComentarioRepository
 * @package App\Repositories
 * @version May 11, 2018, 12:00 am UTC
 *
 * @method Comentario findWithoutFail($id, $columns = ['*'])
 * @method Comentario find($id, $columns = ['*'])
 * @method Comentario first($columns = ['*'])
*/
class ComentarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cliente_id',
        'comentario'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Comentario::class;
    }
}
