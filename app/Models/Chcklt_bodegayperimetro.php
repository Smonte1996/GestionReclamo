<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chcklt_bodegayperimetro extends Model
{
    use HasFactory;

    protected $fillable =[
        'info_checklist_id',
        'seco_frio_id',
        'pasillo_id',
        'bp1',
        'bpo1',
        'bp2',
        'bpo2',
        'bp3',
        'bpo3',
    ];

    function Pasillos()
    {
        return $this->belongsTo(Pasillo::class, 'pasillo_id');
    }
}
