<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'departament_id'];
    /**
     * Get the departament that owns the Activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }

    /**
     * Get all of the dissatisfaction_services for the Activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dissatisfaction_services()
    {
        return $this->hasMany(Dissatisfaction_service::class);
    }
}
