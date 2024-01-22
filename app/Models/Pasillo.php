<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasillo extends Model
{
    use HasFactory;

    protected $fillable = [
        'seco_frio_id',
        'user_id',
        'warehouse_id',
        'name',
        'coordinador',
        'responsables',
        'estado'
        ];
    
    
        function Bodega()
        {
            return $this->belongsTo(Seco_frio::class, 'seco_frio_id');
        }
    
        function supervisor()
        {
            return $this->belongsTo(User::class, 'user_id');
        }
}
