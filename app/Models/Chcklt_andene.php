<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chcklt_andene extends Model
{
    use HasFactory;

    protected $fillable =[
        'info_checklist_id',
        'seco_frio_id',
        'pasillo_id',
        'ba1',
        'bao1',
        'ba2',
        'bao2',
        'ba3',
        'bao3',
        'ba4',
        'bao4',
        'ba5',
        'bao5',
        'ba6',
        'bao6',
        'ba7',
        'bao7',
    ];

    function Pasillos()
    {
        return $this->belongsTo(Pasillo::class, 'pasillo_id');
    }
}
