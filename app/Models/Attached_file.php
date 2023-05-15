<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attached_file extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ext', 'path'];

    /**
     * Get the parent attachedfileable model (notification_service).
     */
    public function attached_fileable()
    {
        return $this->morphTo();
    }
}
