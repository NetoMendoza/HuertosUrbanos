<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Requerimiento
 *
 * @property $id_requ
 * @property $id_insu
 * @property $id_guia
 * @property $cant_requ
 * @property $created_at
 * @property $updated_at
 *
 * @property Guia $guia
 * @property Insumo $insumo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Requerimiento extends Model
{
    
    protected $primaryKey="id_requ";
    static $rules = [
		//'id_requ' => 'required',
		'id_insu' => 'required',
		'id_guia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_requ','id_insu','id_guia','cant_requ'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function guia()
    {
        return $this->hasOne('App\Models\Guia', 'id_guia', 'id_guia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function insumo()
    {
        return $this->hasOne('App\Models\Insumo', 'id_insu', 'id_insu');
    }
    

}
