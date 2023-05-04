<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dissatisfaction_service extends Model
{
    use HasFactory;
    protected $fillable = ['name','activity_id','notification_type','created_at','updated_at'];

    /**
     * Get the activity that owns the Dissatisfaction_service
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    /**
     * The actions that belong to the Dissatisfaction_service
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function actions()
    {
        return $this->belongsToMany(Action::class);
    }

    public  function wharehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    /**
     * Get all of the responsibles.
     */
     public function responsibles()
    {
        return $this->morphMany(Responsible::class, 'responsibleable')->with('employee');
    }

    /**
     * Get all of the notification_service for the Dissatisfaction_service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notification_service()
    {
        return $this->hasMany(Notification_service::class);
    }
   //se hace la funcion static para encontar el empleado que esta asociado con el cliente y envia el correo
    public static function getResponsableByClienteId($clienteId, $almacenId = null)
    {
        $data = [];
        //responsable
        $idResponsables = DB::table('client_employee')->where('client_id', $clienteId)->get();
        $ids_responsables = array_map(fn($value)=> $value->employee_id, $idResponsables->toArray());
        $responsableLikeUsers = User::whereIn('userable_id', $ids_responsables)->get();
        $responsableLikeEmployee = Employee::whereIn('id', $ids_responsables)->get();

        //dd( $responsableLikeUsers = User::whereIn('userable_id', $ids_responsables)->get());

        foreach($responsableLikeUsers as $key => $value){
            $responsableLikeEmployee[$key]->nombres = $value->name;
            $responsableLikeEmployee[$key]->email = $value->email;
        }
        
        $res = $responsableLikeEmployee;

        if ($almacenId != null){
            $res=$responsableLikeEmployee->where('warehouse_id', $almacenId);
        }
        $data["responsables"] = $res->all();
        //obtener datos del lider del responsable

        $lider_id = null; //se declara una varibale null

        //hace el conteo del id del responsble para obtener el lider 
        if (count($data["responsables"])) {
            $data["responsables"] = array_values($data["responsables"]);
            $lider_id = Employee::where('id', $data["responsables"][0]->id)->first()->parent_id; 
        }
       
        //ya obtenido el id del lider hace el recorrido en usuario para obtener el nombre y correo
        if (!empty($lider_id)) {
            $liderLikeUser = User::where('userable_id', $lider_id)->first();
            $data["lider"]["nombre"]= $liderLikeUser->name;
            $data["lider"]["email"]= $liderLikeUser->email;
            
        }
        
        return 
            $data;
            
    }

}
