<?php

namespace App\Exports;

use App\Models\Notification_service;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use PhpOffice\PhpSpreadsheet\Calculation\Database\DVar;

class NotificationservicesExport implements FromQuery, WithMapping,WithHeadings, WithStrictNullComparison
{
    use Exportable;
    
    public $firstdate;
    public $lastdate;

    public function __construct($first,$last)
    {
        $this->firstdate = $first;
        $this->lastdate = $last;
    }



    public function headings(): array
    {
        return [
            '#',
            'Servicio No Conforme',
            'Tipo Notificación',
            'Actividad',
            'Notificado Por',
            'Cliente',
            'Observaciones',
            'Acciones Realizadas por',
            'Fecha de acciones realizadas',
            'Observaciones de acciones',
            'Fecha reportada',
            'Ultima actualización',
            'Responsables',
        ];
    }    
    /**
     * @return \Illuminate\Support\Collection
     */
    public function query()
    {

        return Notification_service::whereBetween(DB::raw('CAST(created_at AS date)'),[$this->firstdate,$this->lastdate]);
    }

    /**
     * @var Invoice $invoice
     */
    public function map($notification_services): array
    {
        $responsibles = "";
        foreach ($notification_services->dissatisfaction_service->responsibles as $key => $responsible) {
             $responsibles .= " * ".$responsible->employee->name." ".$responsible->employee->lastname;
        }
        
        return [
            $notification_services->id,
            $notification_services->dissatisfaction_service->name,
            $notification_services->dissatisfaction_service->notification_type,
            $notification_services->dissatisfaction_service->activity->name,
            $notification_services->employee->lastname,
            $notification_services->client->social_reason,
            $notification_services->observations,
            $user_name = isset($notification_services->user->name) ? $notification_services->user->name: "",
            $notification_services->date_check,
            $notification_services->end_observations,
            $notification_services->created_at,
            $notification_services->updated_at,
            $responsibles,
            
        ];
    }
}
