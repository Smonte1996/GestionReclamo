<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencia_muestreo extends Model
{
    use HasFactory;

    protected $fillable =[
     
        'muestreo_id',
        'data_logistica_id',
        'tamano_muestra_id',
        'niveles_estandar_id',
        'sku_quala',
        'cantidad',
        'vida_util',
        'lote_fecha',
        'etiqueta_producto',
        'matriz_defecto_id',
        'cantidad_caja',
        'fecha_elaboracion',
        'fecha_vencimiento',
        'caja_un',
        'registro_sanitario',
        'estatu_producto',
        'defecto_id',
        'aql_defecto_id',
        'pvp',
        'observacion',
        'estado',
    ];

    public function Data_logistica()
    {
      return $this->belongsTo(Data_logistica::class, 'data_logistica_id');
    }

    function Tamaño_muestra()
    {
      return $this->belongsTo(Tamano_muestra::class, 'tamano_muestra_id');
    }

    function Defecto()
    {
      return $this->belongsTo(Defecto::class, 'defecto_id');
    }

    function aql_defecto() 
    {
        return $this->belongsTo(Aql_defecto::class, 'aql_defecto_id', 'id');  
    }

    function file_muestreo() 
    {
      return $this->hasMany(File_evidencia::class, 'evidencia_muestreo_id');  
    }
}
