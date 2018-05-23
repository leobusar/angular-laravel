<?php

namespace App\Repositories;

use App\Models\Tarea;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TareaRepository
 * @package App\Repositories
 * @version May 22, 2018, 11:43 pm UTC
 *
 * @method Tarea findWithoutFail($id, $columns = ['*'])
 * @method Tarea find($id, $columns = ['*'])
 * @method Tarea first($columns = ['*'])
*/
class TareaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'category'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tarea::class;
    }
}
