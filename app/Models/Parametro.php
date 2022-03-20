<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parametro
 *
 * @property $id_param
 * @property $id_plan
 * @property $id_medi
 * @property $cant_param
 * @property $created_at
 * @property $updated_at
 *
 * @property Medida $medida
 * @property Planta $planta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Parametro extends Model
{
    
    protected $primaryKey="id_param";
    static $rules = [
		//'id_param' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_param','id_plan','id_medi','cant_param'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medida()
    {
        return $this->hasOne('App\Models\Medida', 'id_medi', 'id_medi');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function planta()
    {
        return $this->hasOne('App\Models\Planta', 'id_plan', 'id_plan');
    }
    

}
