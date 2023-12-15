<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infor_practicahg extends Model
{
    use HasFactory;


    protected $fillable =[
        'fecha',
        'almacen',
        'evaluador',
        'solicitud',
        'Proveedor',
        'estado',
    ];

     public function Practicashgs()
    {
        return $this->hasMany(Practicahg::class,'infor_practicahg_id');
    }

    public function Proveedor()
    {
        return $this->hasMany(Practica_proveedore::class,'infor_practicahg_id');
    }

    function Maquila()
    {
        return $this->hasMany(Practica_maquila::class, 'infor_practicahg_id');
    }
}
