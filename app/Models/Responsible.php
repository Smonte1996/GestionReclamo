<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $guarded = [];

    /**
     * Get the parent responsibleable model(dissatisfaction_service)
     */
    public function responsibleable()
    {
        return $this->morphTo();
    }

    /**
     * Get the employee that owns the Responsible
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }


}
