<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defecto_transporte extends Model
{
    use HasFactory;

    protected $fillable =[
        'muestreo_id',
         'data_logistica_id',
         'evidencia_muestreo_id',
         'estado' ,
         'cantidades' ,
         'caja_uni',
        //'lotes' ,
         'observacion',
     ];
 
     function sku()
     {
        return $this->belongsTo(Data_logistica::class, 'data_logistica_id');    
     }

     function Evidencias() 
     {
        return $this->hasMany(Evidencia_muestreo::class,'id', 'evidencia_muestreo_id'); 
     }
 
     function Imagen_check()
     {
       return $this->hasMany(File_transporte::class, 'defecto_transporte_id');
     }
}
