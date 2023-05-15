<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisis_efecto extends Model
{
    use HasFactory;

    protected $fillable =[
        'solicitude_id',
        'porque1',
        'porque2',
        'porque3',
        'porque4',
        'porque5',
        
        ];
}
