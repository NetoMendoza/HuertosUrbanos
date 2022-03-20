<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Insumo
 *
 * @property $id_insu
 * @property $id_tipo_insu
 * @property $nomb_insu
 * @property $marc_insu
 * @property $desc_insu
 * @property $imag_insu
 * @property $created_at
 * @property $updated_at
 *
 * @property ClienteStock[] $clienteStocks
 * @property DetalleTratamiento[] $detalleTratamientos
 * @property Fertilizante[] $fertilizantes
 * @property Herramienta[] $herramientas
 * @property Requerimiento[] $requerimientos
 * @property Semilla[] $semillas
 * @property Stock[] $stocks
 * @property TipoInsumo $tipoInsumo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Insumo extends Model
{
    
    protected $primaryKey="id_insu";
    static $rules = [
		//'id_insu' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_insu','id_tipo_insu','nomb_insu','marc_insu','desc_insu','imag_insu'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clienteStocks()
    {
        return $this->hasMany('App\Models\ClienteStock', 'id_insu', 'id_insu');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleTratamientos()
    {
        return $this->hasMany('App\Models\DetalleTratamiento', 'id_insu', 'id_insu');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fertilizantes()
    {
        return $this->hasMany('App\Models\Fertilizante', 'id_insu', 'id_insu');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function herramientas()
    {
        return $this->hasMany('App\Models\Herramienta', 'id_insu', 'id_insu');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requerimientos()
    {
        return $this->hasMany('App\Models\Requerimiento', 'id_insu', 'id_insu');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function semillas()
    {
        return $this->hasMany('App\Models\Semilla', 'id_insu', 'id_insu');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stocks()
    {
        return $this->hasMany('App\Models\Stock', 'id_insu', 'id_insu');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoInsumo()
    {
        return $this->hasOne('App\Models\TipoInsumo', 'id_tipo_insu', 'id_tipo_insu');
    }
    

}
