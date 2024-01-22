<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chcklt_reefer extends Model
{
    use HasFactory;

    protected $fillable =[
        'info_checklist_id',
        'seco_frio_id',
        'pasillo_id',
        'br1',
        'bro1',
        'br2',
        'bro2',
        'br3',
        'bro3',
        'br4',
        'bro4',
        'br5',
        'bro5',
        'br6',
        'bro6',
    ];

    function Pasillos()
    {
        return $this->belongsTo(Pasillo::class, 'pasillo_id');
    }
}
