<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**
     * Get the parent that owns the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Employee::class);
    }

    /**
     * Get all of the employees for the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees()
    {
        return $this->hasMany(Employee::class, 'parent_id');
    }

    /**
     * The clients that belong to the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }

    /**
     * Get the warehouse that owns the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
    /**
     * Get the departament that owns the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }
    //relacion uno a muchos polimorficas Users

    public function users()
    {
        return $this->morphMany(User::class, 'userable');
    }
    /**
     * Get the position that owns the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    /**
     * Get all of the responsibles for the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responsibles()
    {
        return $this->hasMany(Responsible::class);
    }

    /**
     * Get all of the notification_services for the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notification_services()
    {
        return $this->hasMany(Notification_service::class);
    }
}
