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
    public function Practicashgst()
    {
        return $this->hasOne(Practicahg::class,'infor_practicahg_id');
    }

    public function PersonalRansa()
    {
        return $this->hasMany(Practicahg::class,'infor_practicahg_id')->orderBy('infor_practicahg_id', 'desc')->limit(1);
    }

    public function Proveedores()
    {
        return $this->hasMany(Practica_proveedore::class,'infor_practicahg_id');
    }

     public function Provee()
     {
         return $this->hasOne(Practica_proveedore::class, 'infor_practicahg_id');
     }

    public function NombreProveedor()
    {
        return $this->hasMany(Practica_proveedore::class,'infor_practicahg_id')->orderBy('infor_practicahg_id', 'desc')->limit(1);
    }

    function Maquila()
    {
        return $this->hasMany(Practica_maquila::class, 'infor_practicahg_id');
    }
}
