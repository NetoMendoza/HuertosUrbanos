<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Planta
 *
 * @property $id_plan
 * @property $id_tipo_plan
 * @property $nomb_plan
 * @property $vari_plan
 * @property $created_at
 * @property $updated_at
 *
 * @property Afinidad[] $afinidads
 * @property Guia[] $guias
 * @property Huerto[] $huertos
 * @property Parametro[] $parametros
 * @property ProbPlan[] $probPlans
 * @property TipoPlanta $tipoPlanta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Planta extends Model
{
    
    protected $primaryKey="id_plan";
    static $rules = [
		'id_tipo_plan' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_plan','id_tipo_plan','nomb_plan','vari_plan','desc_plan'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function afinidads()
    {
        return $this->hasMany('App\Models\Afinidad', 'id_plan', 'id_plan');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guias()
    {
        return $this->hasMany('App\Models\Guia', 'id_plan', 'id_plan');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function huertos()
    {
        return $this->hasMany('App\Models\Huerto', 'id_plan', 'id_plan');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parametros()
    {
        return $this->hasMany('App\Models\Parametro', 'id_plan', 'id_plan');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function probPlans()
    {
        return $this->hasMany('App\Models\ProbPlan', 'id_plan', 'id_plan');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoPlanta()
    {
        return $this->hasOne('App\Models\TipoPlanta', 'id_tipo_plan', 'id_tipo_plan');
    }
    

}
