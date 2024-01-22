<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chcklt_seco extends Model
{
    use HasFactory;

    protected $fillable =[
        'info_checklist_id',
        'seco_frio_id',
        'pasillo_id',
        'bs1',
        'bso1',
        'bs2',
        'bso2',
        'bs3',
        'bso3',
        'bs4',
        'bso4',
        'bs5',
        'bso5',
        'bs6',
        'bso6',
        'bs7',
        'bso7',
        'bs8',
        'bso8',
        'bs9',
        'bso9',
        'bs10',
        'bso10',
    ];

    function Pasillos()
    {
        return $this->belongsTo(Pasillo::class, 'pasillo_id');
    }

    function Pasillo(){
       return $this->hasMany(Pasillo::class, 'pasillo_id');
     }

     function supervisores()
      {
        return $this->hasOne(User::class, 'id', 'user_id');
     }

    function zona()
    {
        return $this->belongsTo(Seco_frio::class, 'seco_frio_id');
    }
}
