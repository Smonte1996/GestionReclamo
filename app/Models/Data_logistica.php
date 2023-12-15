<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_logistica extends Model
{
    use HasFactory;

    protected $fillable =[
        'sku_quala',
        'sku_unilever',
        'cliente',
        'descripcion',
        'ean13',
        'ean14',
        'ean128',
        'registro_sanitario',
        'vida_util',
        'pvp',
        'cajas_plancha',
        'plancha_estibas',
        'marca',
        'cajas_estibas',
        'fecha_actualizacion',
        'origen',
        'observacion',
    ];
}
