<?php

namespace App\Repositories;

use App\Models\Libro;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LibroRepository
 * @package App\Repositories
 * @version November 2, 2018, 11:19 pm UTC
 *
 * @method Libro findWithoutFail($id, $columns = ['*'])
 * @method Libro find($id, $columns = ['*'])
 * @method Libro first($columns = ['*'])
*/
class LibroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'departamento',
        'serie',
        'tomo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Libro::class;
    }
}
