<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoActividad
 *
 * @property $id_tipo_acti
 * @property $nomb_tipo_acti
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoActividad extends Model
{
    
    protected $primaryKey="id_tipo_acti";
    static $rules = [
		//'id_tipo_acti' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo_acti','nomb_tipo_acti'];



}
