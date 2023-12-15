<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check_muestreo extends Model
{
    use HasFactory;

    protected $fillable =[
        'muestreo_id',
        'vr1',
        'vr2',
        'vr3',
        'vr4',
        'vr5',
        'vr6',
        'vr7',
        'vd1',
        'vd2',
        'vd3',
        'vd4',
        'vd5',
        'vd6',
        'vd7',
        'vd8',
        'vd9',
    ];

}
