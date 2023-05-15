<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = [];

    //relacion uno a muchos polimorficas Users

    public function users()
    {
        return $this->morphMany(User::class, 'userable');
    }    
}
