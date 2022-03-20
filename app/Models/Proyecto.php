<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id_Proy
 * @property $id_clie
 * @property $nomb_proy
 * @property $esta_proy
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Huerto[] $huertos
 * @property Suelo[] $suelos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    protected $primaryKey="id_proy";
    static $rules = [
		'id_clie' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Proy','id_clie','nomb_proy','esta_proy'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id_clie', 'id_clie');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function huertos()
    {
        return $this->hasMany('App\Models\Huerto', 'id_Proy', 'id_Proy');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suelos()
    {
        return $this->hasMany('App\Models\Suelo', 'id_Proy', 'id_Proy');
    }
    

}
