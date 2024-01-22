<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info_checklist extends Model
{
    use HasFactory;

    protected $fillable =[
        'fecha',
        'almacen',
        'evaluador',
        'estado',
        'codigo'
    ];

    function check_seco()
    {
        return $this->hasMany(chcklt_seco::class, 'info_checklist_id');
    }

    function check_secos()
    {
        return $this->belongsTo(chcklt_seco::class, 'info_checklist_id');
    }

    function check_frio()
    {
        return $this->hasMany(chcklt_fria::class, 'info_checklist_id');
    }

    function check_reefer()
    {
        return $this->hasMany(chcklt_reefer::class, 'info_checklist_id');
    }

    function check_Ampliacion()
    {
        return $this->hasMany(Chcklt_liri::class, 'info_checklist_id');
    }

    function check_andenes()
    {
       return $this->hasMany(Chcklt_andene::class, 'info_checklist_id');
    }

    function Check_Contenedorytuberia()
     {
       return $this->hasMany(Chcklt_contenedorytuberia::class, 'info_checklist_id');
    }

    function Check_Bodegayperimetros()
    {
        return $this->hasMany(Chcklt_bodegayperimetro::class, 'info_checklist_id');
    }
}
