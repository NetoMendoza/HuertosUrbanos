<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medida
 *
 * @property $id_medi
 * @property $nomb_medi
 * @property $desc_medi
 * @property $unid_medi
 * @property $created_at
 * @property $updated_at
 *
 * @property Parametro[] $parametros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medida extends Model
{
    
    protected $primaryKey="id_medi";
    static $rules = [
		//'id_medi' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_medi','nomb_medi','desc_medi','unid_medi'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parametros()
    {
        return $this->hasMany('App\Models\Parametro', 'id_medi', 'id_medi');
    }
    

}
