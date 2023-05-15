<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Causa_ishikawa extends Model
{
    use HasFactory;

    protected $fillable =[
        'solicitude_id',
        'categoria',
        'causa',
        ];
}
