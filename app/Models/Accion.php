<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    use HasFactory;

    // Se le especifica a laravel que ese dato es tipo fecha para que lo formate como fecha.    
    protected $dates = ['fecha_programacion'];

    // Se define los campos que se va guardar en la base.
    protected $fillable =[
    'solicitude_id',
    'name',
    'user_id',
    'fecha_programacion',
    'date_check',
    ];
    
     // Se define la relacion con la tabla de users para ingresar a sus datos.
    public function userse()
    {
       return $this->hasOne(User::class, 'id', 'user_id');
    }
}
