<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asistente
 *
 * @property $id
 * @property $profesor_id
 * @property $nombre
 * @property $direccion
 * @property $cubiculo
 * @property $created_at
 * @property $updated_at
 *
 * @property Profesor $profesor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asistente extends Model
{
    
    static $rules = [
		'profesor_id' => 'required',
		'nombre' => 'required',
		'direccion' => 'required',
		'cubiculo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['profesor_id','nombre','direccion','cubiculo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profesor()
    {
        return $this->hasOne('App\Models\Profesor', 'id', 'profesor_id');
    }
    

}
