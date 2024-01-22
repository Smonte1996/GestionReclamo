<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chcklt_liri extends Model
{
    use HasFactory;

    protected $fillable = [
        'info_checklist_id',
        'seco_frio_id',
        'pasillo_id',
          'bam1',
            'bam2',
            'bam3',
            'bam4',
            'bam5',
            'bam6',
            'bam7',
            'bam8',
            'bam9',
            'bam10',
            'bam11',
            'bam12',
            'bam13',
            'bamo1',
            'bamo2',
            'bamo3',
            'bamo4',
            'bamo5',
            'bamo6',
            'bamo7',
            'bamo8',
            'bamo9',
            'bamo10',
            'bamo11',
            'bamo12',
            'bamo13',
    ];

function Pasillos()
    {
        return $this->belongsTo(Pasillo::class, 'pasillo_id');
    }
}
