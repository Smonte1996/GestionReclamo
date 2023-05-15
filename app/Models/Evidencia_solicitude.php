<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencia_solicitude extends Model
{
    use HasFactory;

    // Se define los campos que se va guardar en la base.
    protected $fillable =[
     
        'solicitude_id',
        'name', 
 
     ]; 
}
