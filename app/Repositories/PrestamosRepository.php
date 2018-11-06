<?php

namespace App\Repositories;

use App\Models\Prestamos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PrestamosRepository
 * @package App\Repositories
 * @version November 6, 2018, 12:34 am UTC
 *
 * @method Prestamos findWithoutFail($id, $columns = ['*'])
 * @method Prestamos find($id, $columns = ['*'])
 * @method Prestamos first($columns = ['*'])
*/
class PrestamosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'n_prestamo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Prestamos::class;
    }
}
