<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoPlanta
 *
 * @property $id_tipo_plan
 * @property $tipo_plan
 * @property $created_at
 * @property $updated_at
 *
 * @property Planta[] $plantas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoPlanta extends Model
{
    
    protected $primaryKey="id_tipo_plan";
    static $rules = [
		//'id_tipo_plan' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo_plan','tipo_plan'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plantas()
    {
        return $this->hasMany('App\Models\Planta', 'id_tipo_plan', 'id_tipo_plan');
    }
    

}
