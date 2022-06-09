<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id
 * @property $profesor_id
 * @property $nombre
 * @property $creditos
 * @property $created_at
 * @property $updated_at
 *
 * @property Profesor $profesor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{
    
    static $rules = [
		'profesor_id' => 'required',
		'nombre' => 'required',
		'creditos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['profesor_id','nombre','creditos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profesor()
    {
        return $this->hasOne('App\Models\Profesor', 'id', 'profesor_id');
    }
    

}
