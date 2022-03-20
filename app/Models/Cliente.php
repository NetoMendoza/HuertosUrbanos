<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id_usuario
 * @property $id_clie
 * @property $esta_clie
 * @property $created_at
 * @property $updated_at
 *
 * @property ClienteStock[] $clienteStocks
 * @property Proyecto[] $proyectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    protected $primaryKey="id_cliente";
    static $rules = [
		'id_usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','id_clie','esta_clie'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clienteStocks()
    {
        return $this->hasMany('App\Models\ClienteStock', 'id_clie', 'id_clie');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proyectos()
    {
        return $this->hasMany('App\Models\Proyecto', 'id_clie', 'id_clie');
    }
    

}
