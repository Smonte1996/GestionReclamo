<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriz_defecto extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'marca'
       ];
}
