<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'solicitude_id',
        'p1',
        'ob1',
        'p2',
        'ob2',
        'p3',
        'ob3',
        'p4',
        'ob4',
       ];
}
