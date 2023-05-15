<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];

    /**
     * The dissatisfactionservice that belong to the Action
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function dissatisfaction_service()
    {
        return $this->belongsToMany(Dissatisfaction_service::class);
    }
}
