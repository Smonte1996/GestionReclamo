<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File_transporte extends Model
{
    use HasFactory;

    protected $fillable =[
        'muestreo_id',
        'defecto_transporte_id',
        'name'
    ];
}
