<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
/**
 * Class Prestamos
 * @package App\Models
 * @version November 6, 2018, 12:34 am UTC
 *
 * @property text) nprestamo(integer
 */
class Prestamos extends Model
{
    use SoftDeletes;

    public $table = 'prestamos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'n_prestamo',
        'user_id',
        'libro_id',
        'area_id',
        'estado'
    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'n_prestamo' => 'integer',
        'user_id'=> 'integer',
        'libro_id'=> 'integer',
        'area_id'=> 'integer'
    ];


public function area()
{
    return $this->belongsTo(Area::class,'area_id');
}


public function libro()
{
    /*un pretamo tiene muhcos libros*/
    return $this->belongsTo(Libro::class,'libro_id');
}

public function user()
{
    /*un pretamo tiene muhcos libros*/
    return $this->belongsTo(User::class,'user_id');
}

    
}
