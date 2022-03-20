<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Guia
 *
 * @property $id_guia
 * @property $id_plan
 * @property $id_expe
 * @property $desc_guia
 * @property $esta_guia
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividad[] $actividads
 * @property Experto $experto
 * @property Huerto[] $huertos
 * @property Planta $planta
 * @property Requerimiento[] $requerimientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Guia extends Model
{
    
    protected $primaryKey="id_guia";
    static $rules = [
		'id_plan' => 'required',
		'id_expe' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_guia','id_plan','id_expe','desc_guia','esta_guia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actividads()
    {
        return $this->hasMany('App\Models\Actividad', 'id_guia', 'id_guia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function experto()
    {
        return $this->hasOne('App\Models\Experto', 'id_expe', 'id_expe');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function huertos()
    {
        return $this->hasMany('App\Models\Huerto', 'id_guia', 'id_guia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function planta()
    {
        return $this->hasOne('App\Models\Planta', 'id_plan', 'id_plan');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requerimientos()
    {
        return $this->hasMany('App\Models\Requerimiento', 'id_guia', 'id_guia');
    }
    

}
