<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigacion extends Model
{
    use HasFactory;

    // Se le especifica a laravel que ese dato es tipo fecha para que lo formate como fecha.
    protected $dates = ['fecha_programada'];

    // Se define los campos que se va guardar en la base.
    protected $fillable =[
     'solicitude_id',
     'user_id',
     'correccion',
     'causa_raiz',
     'evaluacion_eficacia',
     'fecha_programada',
     'observacion',
     'archivo',
     'argumento',
     'imagen',  
     'codigo_generado', 
     'date_check',
    ];

     // Se define la relacion con la tabla de users para ingresar a sus datos.
     public function user()
     {
        return $this->hasOne(User::class,'id', 'user_id');
     }
}
