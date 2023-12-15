<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'email', 'password','userable_id',];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'two_factor_recovery_codes', 'two_factor_secret'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['profile_photo_url'];

    public function userable()
    {
        return $this->morphTo();
    }

    /**
     * Get all of the notification_services for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notification_services()
    {
        return $this->hasMany(Notification_service::class);
    }
    
   // Aqui se manda a llamar al empleado model para que traiga el id asociado con el Almacen.

    public function warehouse()
    {
     return Employee::where('id', $this->userable_id)->first()->warehouse_id;
    }

    // Esta relacion nos ayuda a filtrar los empleador por cargo con la relacion de polimorfa que tiene con la tabla de users.
    public function Employee()
    {
        return $this->belongsTo(Employee::class, 'userable_id', 'id');
    }
   
    // Esta relación es para cuando el cliente se auntetifique lo indentifique con que id esta ingresando y nos permite filtrar con id del cliente
    public function client()
    {
        return Client::where('id', $this->userable_id)->first()->id;
    }
}
