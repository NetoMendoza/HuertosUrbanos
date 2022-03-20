<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Experto
 *
 * @property $id_expe
 * @property $id_usuario
 * @property $esta_expe
 * @property $created_at
 * @property $updated_at
 *
 * @property Guia[] $guias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Experto extends Model
{
    
    protected $primaryKey="id_expe";
    static $rules = [
		'id_usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_expe','id_usuario','esta_expe'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guias()
    {
        return $this->hasMany('App\Models\Guia', 'id_expe', 'id_expe');
    }
    

}
