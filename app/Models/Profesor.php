<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profesor
 *
 * @property $id
 * @property $nombre
 * @property $telefono
 * @property $domicilio
 * @property $created_at
 * @property $updated_at
 *
 * @property Asistente[] $asistentes
 * @property Curso[] $cursos
 * @property Telefono[] $telefonos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Profesor extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'telefono' => 'required',
		'domicilio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','telefono','domicilio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistentes()
    {
        return $this->hasMany('App\Models\Asistente', 'profesor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos()
    {
        return $this->hasMany('App\Models\Curso', 'profesor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function telefonos()
    {
        return $this->hasMany('App\Models\Telefono', 'profesor_id', 'id');
    }
    

}
