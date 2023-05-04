<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification_service extends Model
{
    use HasFactory;
    protected $fillable = ['dissatisfaction_service_id', 'employee_id','observations', 'user_id', 'date_check' ,'end_observations', 'client_id', 'warehouse_id','employeResponsable_id'];

    /**
     * Get the client that owns the Notification_service
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get all of the Notification_services attached_files.
     */
    public function attached_files()
    {
        return $this->morphMany(Attached_file::class, 'attached_fileable');
    }

    /**
     * Get the dissatisfaction_service that owns the Notification_service
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dissatisfaction_service()
    {
        return $this->belongsTo(Dissatisfaction_service::class)->with('activity');
    }

    /**
     * Get the employee that owns the Notification_service
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    /**
     * Get the user that owns the Notification_service
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //Se hace la relacion con almacen para obtener datos.
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
