<?php

namespace App\Http\Controllers;

use App\Exports\NotificationservicesExport;
use App\Models\Notification_service;
use Illuminate\Http\Request;
use DataTables;
use Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NotificationserviceController extends Controller
{
    public $file = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modulos.dissatisfied_services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notification_service  $notification_service
     * @return \Illuminate\Http\Response
     */
    public function show(Notification_service $notification_service)
    {
        return view('modulos.dissatisfied_services.show', compact('notification_service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notification_service  $notification_service
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification_service $notification_service)
    {
        if (!empty($notification_service->date_check)) {
            abort(401);
        } else {
            return view('modulos.dissatisfied_services.checkactions', compact('notification_service'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notification_service  $notification_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification_service $notification_service)
    {
        $notification_service->update([
            'user_id' => Auth::user()->id,
            'date_check' => now(),
            'end_observations' => $request->endobservations,
        ]);

        if ($request->file('file')) {
            foreach ($request->file('file') as $image) {
                if ($image->extension() == 'xlsx' || $image->extension() == 'xls') {
                    $url = $image->store('notification_service/analisis/');   
                }else{
                    $url = $image->store('notification_service/');
                }
                $notification_service->attached_files()->create([
                    'name' => $image->hashName(),
                    'ext' => $image->extension(),
                    'path' => $url,
                ]);
            }
            return route('adm.dashboard');
        } else {
            return redirect()->route('adm.dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notification_service  $notification_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification_service $notification_service)
    {
        //
    }

    public function download(Notification_service $notification_service)
    {
        foreach ($notification_service->attached_files as $file) {
            if ($file->ext == 'xls' || $file->ext == 'xlsx') {
                return Storage::download($file->path);
            }
        }
    }

    public function download_notificacion(Request $request)
    {
        return (new NotificationservicesExport($request->date_inicial, $request->date_final))->download('Notificaciones.xlsx');
    }
    //Donde se manda ah llamar la tabla de lista de novedades.
    public function getData()
    {
        $notification_services = Notification_service::with('client')
            ->with('user')
            ->with('employee')
            ->with('warehouse')
            ->with('dissatisfaction_service')
            ->select('notification_services.*');
            // se aplica un where para que se pueda filtrar las notificaciones por Almacen.
          // ->where('warehouse_id', Auth::user()->warehouse());
        return DataTables::eloquent($notification_services)
            ->addColumn('estados', function ($notification_service) {
                if (!empty($notification_service->date_check)) {
                    return '<span class="bg-green-500 p-1 rounded text-white">Terminado</span>';
                } else {
                    return '<span class="bg-lead-500 p-1 rounded text-white">Pendiente</span>';
                }
            })
            ->filterColumn('estados', function ($query, $keyword) {
                $query->whereRaw('CONVERT(date, created_at) like ?', ["%$keyword%"]);
            })
            ->addColumn('action', function (Notification_service $notification_service) {
                $actions =
                    '<div class="btn-group btn-group-sm " role="group" aria-label="">
                            <a href="' .
                    route('notifications.show', $notification_service) .
                    '" class="btn btn-orange-500 text-white border"><i class="fa fa-info"></i></a>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever=' .
                    $notification_service->attached_files .
                    ' type="button" class="border btn btn-orange-500 text-white images"><i class="fa fa-image"></i></button>';
                if ($notification_service->dissatisfaction_service->notification_type == 'NO CONFORMIDAD' && $notification_service->date_check != null) {
                    $actions .= '<form  action="' . route('notifications.download', $notification_service) . '" method="POST">' . csrf_field() . ' <button type="submit" class="btn btn-orange-500 text-white border" ><i class="fa fa-download"></i></button> </form></div>';
                } else {
                    $actions .= '</div>';
                }
                return $actions;
            })
            ->make();
    }
}
