<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practicahg extends Model
{
    use HasFactory;

    protected $fillable = [
        'infor_practicahg_id',
        'employee_id',
        'user_id',
        'uc',
        'uc1',
        'uc2',
        'uc3',
        'bl' ,
        'bl1',
        'bl2',
        'bl3',
        'cl' ,
        'cl1',
        'cl2',
        'cl3',
        'na' ,
        'na1',
        'na2',
        'na3',
        'cp' ,
        'cp1',
        'cp2',
        'cp3',
        'ul',
        'ul1',
        'ul2',
        'ul3',
    ];

   public function Supervisores()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }

   public function Personal()
    {
       return $this->hasOne(Employee::class,'id','employee_id');
    }

    public function Supervisor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
