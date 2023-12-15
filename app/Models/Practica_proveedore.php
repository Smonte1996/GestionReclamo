<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practica_proveedore extends Model
{
    use HasFactory;

    protected $fillable = [
        'infor_practicahg_id',
        'supervisor',
        'personal',
        'proveedor',
        'puc',
        'puc1',
        'puc2',
        'puc3',
        'pbl' ,
        'pbl1',
        'pbl2',
        'pbl3',
        'pcl' ,
        'pcl1',
        'pcl2',
        'pcl3',
        'pna' ,
        'pna1',
        'pna2',
        'pna3',
        'pcp' ,
        'pcp1',
        'pcp2',
        'pcp3',
        'pul',
        'pul1',
        'pul2',
        'pul3',
    ];

    function Responsable()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
