<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $id_usuario
 * @property $id_prov
 * @property $esta_prov
 * @property $created_at
 * @property $updated_at
 *
 * @property Stock[] $stocks
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    
    protected $primaryKey="id_prov";
    static $rules = [
		'id_usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','id_prov','esta_prov'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stocks()
    {
        return $this->hasMany('App\Models\Stock', 'id_prov', 'id_prov');
    }
    

}
