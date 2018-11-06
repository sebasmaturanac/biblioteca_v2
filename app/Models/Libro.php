<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Libro
 * @package App\Models
 * @version November 2, 2018, 11:19 pm UTC
 *
 * @property string departamento
 * @property string serie
 * @property integer tomo
 */
class Libro extends Model
{
    use SoftDeletes;

    public $table = 'libros';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'departamento',
        'serie',
        'tomo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'departamento' => 'string',
        'serie' => 'string',
        'tomo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'departamento' => 'string',
        'serie' => 'string',
        'tomo' => 'integer'
    ];

    



public function prestamo()
{
    /*muchos libros estan relacionados a un prestamo*/
    return $this->hasMany(Prestamo::class);
}

}
