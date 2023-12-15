<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aql_defecto extends Model
{
    use HasFactory;

    protected $fillable =[
        'tamano_muestra_id',
      //   'matriz_defecto_id',
        'Ac',
      //   'defecto',
        'Aql',
        'Rec',
      ];
  
      function tamaño_muestra() 
      {
          return $this->belongsTo(Tamano_muestra::class, 'tamano_muestra_id');
      }
  
      function Matriz() 
      {
          return $this->belongsTo(Matriz_defecto::class, 'matriz_defecto_id');
      }
}
