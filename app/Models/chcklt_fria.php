<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chcklt_fria extends Model
{
    use HasFactory;

    protected $fillable =[
        'info_checklist_id',
        'seco_frio_id',
        'pasillo_id',
        'bf1',
        'bfo1',
        'bf2',
        'bfo2',
        'bf3',
        'bfo3',
        'bf4',
        'bfo4',
        'bf5',
        'bfo5',
        'bf6',
        'bfo6',
        'bf7',
        'bfo7',
        'bf8',
        'bfo8',
        'bf9',
        'bfo9',
        'bf10',
        'bfo10',
    ];

    function Pasillos()
    {
        return $this->belongsTo(Pasillo::class, 'pasillo_id');
    }
}
