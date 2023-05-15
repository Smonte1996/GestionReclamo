<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * The employees that belong to the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
    //relacion uno a muchos polimorficas Users

    public function users()
    {
        return $this->morphMany(User::class, 'userable');
    }

    /**
     * Get all of the notificationservices for the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notificationservices()
    {
        return $this->hasMany(Notification_service::class);
    }

}
