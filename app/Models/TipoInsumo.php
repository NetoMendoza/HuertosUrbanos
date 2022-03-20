<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoInsumo
 *
 * @property $id_tipo_insu
 * @property $nomb_tipo_insu
 * @property $created_at
 * @property $updated_at
 *
 * @property Insumo[] $insumos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoInsumo extends Model
{
    
    protected $primaryKey="id_tipo_insu";
    static $rules = [
		//'id_tipo_insu' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo_insu','nomb_tipo_insu'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function insumos()
    {
        return $this->hasMany('App\Models\Insumo', 'id_tipo_insu', 'id_tipo_insu');
    }
    

}
