<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    use HasFactory;

   // Se define los campos que se va guardar en la base.
    protected $fillable =[
        'solicitude_id',
        'user_id',
        'causal_general_id',
        'detalle_causal_id',
        'codigo_generado',
        ];
    
        // Se define la relacion con la tabla de causal_generals de uno a uno.
         public function causal_general()
         {
            return $this->hasOne(Causal_general::class, 'id', 'causal_general_id');
         }

         // Se define la relacion con la tabla de detalles_causals de uno a uno.
         public function detalle_causal()
         {
            return $this->hasOne(Detalle_causal::class, 'id', 'detalle_causal_id');
         }
    
         // Se define la relacion con la tabla de users para ingresar a sus datos.
         public function users()
         {
           return $this->hasOne(User::class, 'id', 'user_id'); 
        }
        
}
