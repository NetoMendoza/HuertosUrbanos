<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Huerto
 *
 * @property $id_huer
 * @property $id_guia
 * @property $id_Proy
 * @property $id_plan
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Cronograma[] $cronogramas
 * @property Guia $guia
 * @property Planta $planta
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Huerto extends Model
{
    use SoftDeletes;

    protected $primaryKey="id_huer";
    static $rules = [
		'id_guia' => 'required',
		'id_proy' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_huer','id_guia','id_proy','id_plan'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cronogramas()
    {
        return $this->hasMany('App\Models\Cronograma', 'id_huer', 'id_huer');
    }
    
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
    public function planta()
    {
        return $this->hasOne('App\Models\Planta', 'id_plan', 'id_plan');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id_Proy', 'id_Proy');
    }
    

}
