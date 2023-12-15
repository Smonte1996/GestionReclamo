<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveles_estandar extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
    ];

    function Tamaño_Muestra()
    {
      return $this->hasMany(Tamano_muestra::class, 'id');    
    }
}
