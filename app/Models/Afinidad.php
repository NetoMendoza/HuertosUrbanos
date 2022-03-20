<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Afinidad
 *
 * @property $id_afin
 * @property $id_tipo_afin
 * @property $id_plan
 * @property $id_plant2
 * @property $created_at
 * @property $updated_at
 *
 * @property Planta $planta
 * @property TipoAfinidad $tipoAfinidad
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Afinidad extends Model
{
    
    protected $primaryKey="id_afin";
    static $rules = [
		//'id_afin' => 'required',
		'id_tipo_afin' => 'required',
		'id_plan' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_afin','id_tipo_afin','id_plan','id_plant2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function planta()
    {
        return $this->hasOne('App\Models\Planta', 'id_plan', 'id_plan');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoAfinidad()
    {
        return $this->hasOne('App\Models\TipoAfinidad', 'id_tipo_afin', 'id_tipo_afin');
    }
    

}
