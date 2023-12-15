<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muestreo extends Model
{
    use HasFactory;

    protected $fillable =[
        'bodega',
        'client_id',
        'contenedor',
         'guias',
         'fecha_recepcion',
         'hora_recepcion',
         'n_pedido',
         'responsable',  
         'transportista',
          'sello',
          'observacion',
         'estado'
       ];
   
       public function evidencia()
       {
         return $this->hasMany(Evidencia_muestreo::class, 'muestreo_id');
       }

       public function imagenes()
       {
         return $this->hasMany(File_evidencia::class, 'muestreo_id');
       }
   
       public function clientes()
       {
         return $this->belongsTo(Client::class, 'client_id');
       }

       function Checklist() 
        {
            return $this->hasOne(Check_muestreo::class, 'muestreo_id');  
        }

      function Defecto() 
      {
        return $this->hasMany(Defecto_transporte::class, 'muestreo_id'); 
      }
}
