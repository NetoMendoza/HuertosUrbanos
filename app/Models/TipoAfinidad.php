<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoAfinidad
 *
 * @property $id_tipo_afin
 * @property $tipo_afin
 * @property $created_at
 * @property $updated_at
 *
 * @property Afinidad[] $afinidads
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoAfinidad extends Model
{
    
    protected $primaryKey="id_tipo_afin";
    static $rules = [
		//'id_tipo_afin' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo_afin','tipo_afin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function afinidads()
    {
        return $this->hasMany('App\Models\Afinidad', 'id_tipo_afin', 'id_tipo_afin');
    }
    

}
