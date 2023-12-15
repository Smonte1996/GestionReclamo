<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamano_muestra extends Model
{
    use HasFactory;

    protected $fillable =[
        'niveles_estandar_id',
        'nivel',
        'muestra',
        'tamano_lote',
    ];

    function Niveles_estandar()
    {
        return $this->hasOne(Niveles_estandar::class, 'id', 'niveles_estandar_id');
    }
    
    public function nivele_estandars()
    {
        return $this->belongsTo(Niveles_estandar::class, 'niveles_estandar_id');
    }
}
