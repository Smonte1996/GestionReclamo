<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Causal_general extends Model
{
    use HasFactory;

    // Se define los campos que se va guardar en la base.
    protected $fillable =[
        'name',
    ];


    public function detalle_causal()
    {
        return $this->hasMany(Detalle_causal::class, 'id');
    }
}
