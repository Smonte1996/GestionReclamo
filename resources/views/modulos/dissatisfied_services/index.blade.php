<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Matriz de Servicio No Conforme</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <a href="https://app.powerbi.com/view?r=eyJrIjoiY2Y5YmZhYTgtMzJlMC00OGE5LTllYWUtYzQ5Y2JmNjBjNmRhIiwidCI6IjMyZTAxNzYzLTQxZTItNDA5My1hZWQ2LTVhZjFmOWMzNzk2NSJ9" class="btn btn-sm btn-green-400 text-white" target="_blank">Indicador Power BI</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Listado de Notificaciones Pendientes</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="mb-2">
                                <button data-bs-toggle="modal" data-bs-target="#downloadNotification"
                                    class="btn btn-green-400 text-white">Descargar Data</button>
                            </div>
                            <table id="table_notification_dissatisfactions"
                                class="text-green-500 table align-middle table-hover dt-responsive" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th data-priority="1">Almacén</th>
                                        <th>Tipo</th>
                                        <th>Procesos</th>
                                        <th data-priority="1">Cliente</th>
                                        <th data-priority="2">Reportado</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal para Imagenes --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="overflow-scroll d-block imagesc">
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                    {{-- <button type="button" class="btn btn-primary">Ok</button> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- Modal para Descargar la Información --}}

    <div class="modal fade" id="downloadNotification" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Descargar Datos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('notifications.downloadnotificacion') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label>Desde: </label>
                                <input type="date" name="date_inicial" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <Label>Hasta :</Label>
                                <input type="date" name="date_final" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Descargar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
