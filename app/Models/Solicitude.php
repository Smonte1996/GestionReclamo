<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model
{
    use HasFactory;

    // Se define los campos que se va guardar en la base.
    protected $fillable =[
        'nombre',
        'correo',
        'celular',
        'cliente',
        'sede_id',
        'tipo_reclamo_id',
        'servicio_ransa_id',
        'adicional_id',
        'codigo_generado',
        'titulo',
        'Descripcion',
        'estado',
        'fecha_registro',
        'imagen',
        ];

        //Se define la relacion entre la tabla sedes de uno a uno.

        public function sede()
    {
        return $this->hasOne(Sede::class, 'id', 'sede_id');
    }
     
    //Se define la relacion con la tabla de servicio_ransas de uno a uno.
    public function servicio_ransa()
    {
        return $this->hasOne(Servicio_ransa::class, 'id', 'servicio_ransa_id');
    }

     //Se define la relacion con la tabla de Tipo_reclamos de uno a uno.
    public function tipo_reclamo()
    {
        return $this->hasOne(Tipo_reclamo::class, 'id', 'tipo_reclamo_id');
    }

    //Se define la relacion con la relacion de la tabla users de belongsto lo que hace es delvover los solicitado
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // Se define la relacion con la tabla de adicionals de uno a uno.
    public function adicional()
    {
        return $this->hasOne(Adicional::class, 'id', 'adicional_id');
    }

    // Se define la relacion con la tabla clasificacions de uno a uno.
    public function clasificacion()
     {
         return $this->hasOne(Clasificacion::class, 'solicitude_id');
     }

     //Se define la relacion con la tabla investigacion de uno a uno.
     public function investigacion()
     {
       return $this->hasOne(Investigacion::class, 'solicitude_id');
     }
 
     //Se define la relacion con la tabla de accions de uno ha mucho ya se va ha traer muchas acciones que se relaciona con el mismo id.
     public function acciones()
     {
        return $this->hasMany(Accion::class, 'solicitude_id');
     }

     //Se define la relacion con la tabla de encuesta de uno a uno.
     public function encuesta()
     {
        return $this->hasOne(Calificacion::class, 'solicitude_id');
     }

     // Se define la relacion con la tabla de evidencia de uno a muchos ya que trae mas de una foto que se asocia con el id relacional.
     public function Evidencia()
     {
        return $this->hasMany(Evidencia_solicitude::class, 'solicitude_id');
     }
}
