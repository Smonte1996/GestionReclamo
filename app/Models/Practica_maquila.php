<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practica_maquila extends Model
{
    use HasFactory;

    protected $fillable = [
        'infor_practicahg_id',
        'personal',
        'Supervisor',
        'muc',
        'muc1',
        'muc2',
        'mbl',
        'mbl1',
        'mbl2',
        'mcl',
        'mcl1',
        'mcl2',
        'mcp',
        'mcp1',
        'mcp2',
        'mna',
        'mna1',
        'mna2',
        'mul',
        'mul1',
        'mul2',
        'mnp',
        'mnp1',
        'mnp2',
        'mml',
        'mml1',
        'mml2',
        'mnaa',
        'mnaa1',
        'mnaa2',
        'mub',
        'mub1',
        'mub2',
        'mcb',
        'mcb1',
        'mcb2',
        'mbe',
        'mbe1',
        'mbe2',
        'mhg',
        'mhg1',
        'mhg2',
        'observacion',
    ];
}
