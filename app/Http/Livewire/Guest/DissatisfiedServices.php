<?php

namespace App\Http\Livewire\Guest;

use App\Mail\Notificationservice;
use Livewire\WithFileUploads;

use App\Models\Warehouse;
use App\Models\Activity;
use App\Models\Client;
use App\Models\Dissatisfaction_service;
use App\Models\Employee;
use App\Models\Notification_service;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class DissatisfiedServices extends Component
{
    use WithFileUploads;

    public $identification_card;
    public $activity_id = "";
    public $dissatisfaction_service_id;
    public $images;
    public $observations;
    //se declara las variables publicas(Global)
    public $client_id;
    public $responsable;
    public $responsableEmail;
    public $lider;
    public $responsables;
    public $almacenes;
    public $almacen_id;

    protected $rules = [
        'almacen_id' => 'required',
        'identification_card' => 'required',
        'activity_id' => 'required',
        'client_id' => 'required',
        'dissatisfaction_service_id' => 'required'
    ];

    //Se asignar el responsable segun su ciente asignado 
    public function updated($name, $value)
    {
        if ($name == "client_id" || $name == "almacen_id") {
            $cliente_id = $this->client_id;
            $almacen_id = $this->almacen_id;
            $this->responsables = Dissatisfaction_service::getResponsableByClienteId($cliente_id, $almacen_id);
            if (count($this->responsables['responsables'])) {
                $this->responsable  =  $this->responsables['responsables'][0]->nombres;
                $this->responsableEmail  =  $this->responsables['responsables'][0]->nombre;
                $this->lider = $this->responsables['lider']['nombre'];
            }else {
                $this->reset(['responsable', 'responsableEmail', 'lider']);
            }
            
        }
    }


    //Obtener datos de la persona quien hace el registro
    public function getEmployeeProperty()
    {
        if (!empty($this->identification_card)) {
            return Employee::where('identification_card', $this->identification_card)->first();
        } else {
            return "";
        }
    }
    //Lista de Servicios no conformes segun la actividad
    public function getDissatisfactionServicesProperty()
    {
        if (!empty($this->activity_id)) {
            return Dissatisfaction_service::where('activity_id', $this->activity_id)->get();
        } else {
            return "";
        }
    }


    //datos del servicio de no conformidad seleccionado
    public function getDissatisfactionServiceProperty()
    {
        if (!empty($this->dissatisfaction_service_id)) {
            return Dissatisfaction_service::find($this->dissatisfaction_service_id);
        } else {
            return null;
        }
    }
    //se crea la funcion por guarda los datos extrae los datos guardaos para enviar el correo.
    public function save()
    {
        $this->validate();

        $notification_service = Notification_service::create([
            'dissatisfaction_service_id' => $this->dissatisfaction_service_id,
            'employee_id' => $this->employee->id,
            'observations' => $this->observations,
            'client_id' => $this->client_id,
            'warehouse_id' => $this->almacen_id,
            'employeResponsable_id' => $this->responsables['responsables'][0]['id']
        ]);
        if (!is_null($this->images)) {
            foreach ($this->images as $image) {
                $url =  $image->store('notification_service');
                $notification_service->attached_files()->create([
                    'name' => $image->hashName(),
                    'ext' => $image->extension(),
                    'path' => $url
                ]);
            }
        }
        //se agrega al responsable y al lider para el envio del las notificaciones y se agrega los correos ded calidad.
        $correos = ['EGananR@ransa.net','WFuentesB@ransa.net','GBaldeonC@ransa.net','smontenegrot@ransa.net'];
        foreach ($this->responsables['responsables'] as $key => $value) {
            $correos[] = $value['email'];
        }
        $correos[] = $this->responsables["lider"]["email"];
        //Donde se ubica el responsable y se le envia el email
       Mail::to($correos)->send(new Notificationservice($notification_service));
        return redirect()->route('adm.dashboard');
    }


    public function render()
    {
        $this->almacenes = Warehouse::all(['id','name']);//se llama los datos del almacen.
        $clients = Client::all();
        $activities = Activity::all();
        return view('livewire.guest.dissatisfied-services', compact('clients'))->with(compact('activities'))->layout('layouts.guest');
    }
}