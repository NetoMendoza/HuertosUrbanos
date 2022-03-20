<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actividad
 *
 * @property $id_acti
 * @property $id_guia
 * @property $nomb_acti
 * @property $desc_acti
 * @property $tiem_acti
 * @property $prio_acti
 * @property $esta_acti
 * @property $created_at
 * @property $updated_at
 *
 * @property Cronograma[] $cronogramas
 * @property Guia $guia
 * @property TipoActividad[] $tipoActividads
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actividad extends Model
{
    
    protected $primaryKey="id_acti";
    static $rules = [
		//'id_acti' => 'required',
		'id_guia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_acti','id_tipo_acti','id_guia','nomb_acti','desc_acti','tiem_acti','prio_acti','esta_acti'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cronogramas()
    {
        return $this->hasMany('App\Models\Cronograma', 'id_acti', 'id_acti');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function guia()
    {
        return $this->hasOne('App\Models\Guia', 'id_guia', 'id_guia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoActividads()
    {
        return $this->hasMany('App\Models\TipoActividad', 'id_acti', 'id_acti');
    }
    

}
