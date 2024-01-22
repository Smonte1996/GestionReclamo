<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chcklt_contenedorytuberia extends Model
{
    use HasFactory;

    protected $fillable =[
        'info_checklist_id',
        'seco_frio_id',
        'pasillo_id',
        'cct',
        'ccto',
        'cct2',
        'ccto2',
        'cct3',
        'ccto3',
    ];

    function Pasillos()
    {
        return $this->belongsTo(Pasillo::class, 'pasillo_id');
    }
}
