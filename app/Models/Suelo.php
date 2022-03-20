<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Suelo
 *
 * @property $id_suel
 * @property $id_Proy
 * @property $anch_suel
 * @property $larg_suel
 * @property $hume_suel
 * @property $ph_suel
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Suelo extends Model
{
    
    protected $primaryKey="id_suel";
    static $rules = [
		'id_proy' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_suel','id_proy','anch_suel','larg_suel','hume_suel','ph_suel'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id_Proy', 'id_Proy');
    }
    

}
