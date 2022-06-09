<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Telefono
 *
 * @property $id
 * @property $profesor_id
 * @property $numero
 * @property $created_at
 * @property $updated_at
 *
 * @property Profesor $profesor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Telefono extends Model
{
    
    static $rules = [
		'profesor_id' => 'required',
		'numero' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['profesor_id','numero'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profesor()
    {
        return $this->hasOne('App\Models\Profesor', 'id', 'profesor_id');
    }
    

}
