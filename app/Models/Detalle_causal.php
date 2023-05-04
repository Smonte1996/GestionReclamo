<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_causal extends Model
{
    use HasFactory;

    // Se define los campos que se va guardar en la base.
    protected $fillable =[
        'name',
        'causal_general_id',
    ];

    public function causal_general()
    {
        return $this->belongsTo(Causal_general::class, 'causal_general_id');
    }
}
