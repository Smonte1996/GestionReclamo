<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File_evidencia extends Model
{
    use HasFactory;

    protected $fillable =[

        'muestreo_id',
        'evidencia_muestreo_id',
        'data_logistica_id',
        'name',
    ];

    public function base_logistica()
    {
        return $this->belongsTo(Data_logistica::class, 'data_logistica_id');
    }
}
