<?php

namespace App\Repositories;

use App\Models\Area;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AreaRepository
 * @package App\Repositories
 * @version November 2, 2018, 11:15 pm UTC
 *
 * @method Area findWithoutFail($id, $columns = ['*'])
 * @method Area find($id, $columns = ['*'])
 * @method Area first($columns = ['*'])
*/
class AreaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'area',
        'responsable',
        'telefono_interno',
        'n_oficina',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Area::class;
    }
}
