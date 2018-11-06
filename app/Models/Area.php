<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Libro;
use Prestamo;
/**
 * Class Area
 * @package App\Models
 * @version November 2, 2018, 11:15 pm UTC
 *
 * @property string area
 * @property string responsable
 * @property integer telefono_interno
 * @property integer n_oficina
 * @property integer user_id
 */
class Area extends Model
{
    use SoftDeletes;

    public $table = 'areas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'area',
        'responsable',
        'telefono_interno',
        'n_oficina',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'area' => 'string',
        'responsable' => 'string',
        'telefono_interno' => 'integer',
        'n_oficina' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];





public function prestamos()
{
    return $this->hasMany(Prestamo::class);
}

    
}
