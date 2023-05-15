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
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Información</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="">
                                <a href="{{ route('notifications.index') }}"
                                    class="btn btn-sm btn-orange-500">Regresar</a>
                            </div>
                            <div class="d-grid gap-1">
                                <div class="">
                                    <label class="form-label text-lead-500 ">Fecha de Creación:</label>
                                    <p class="form-control text-orange-500">{{ $notification_service->created_at }}
                                    </p>
                                </div>
                                <div class="">
                                    <label class="form-label text-lead-500 ">Potencial Servicio No Conforme:</label>
                                    <p class="form-control text-orange-500">
                                        {{ $notification_service->dissatisfaction_service->name }}</p>
                                </div>
                                <div class="">
                                    <label class="form-label text-lead-500 ">Observacion Inicial:</label>
                                    <p class="form-control text-orange-500">{{ $notification_service->observations }}
                                    </p>
                                </div>
                                <div class="">
                                    <label class="form-label text-lead-500 ">Acciones:</label>
                                    <div class="form-control ">
                                        <ul class="text-orange-500">

                                        
                                        @foreach ($notification_service->dissatisfaction_service->actions as $action)
                                           <li>{{ $action->name }}</li>
                                        @endforeach
                                    </ul>
                                    </div>

                                </div>
                                @isset($notification_service->user->name)
                                    <div class="">
                                        <label class="form-label text-lead-500 ">Usuario quien da la respuesta:</label>
                                        <p class="form-control text-orange-500">{{ $notification_service->user->name }}
                                        </p>
                                    </div>

                                    <div class="">
                                        <label class="form-label text-lead-500 ">Fecha de Respuesta:</label>
                                        <p class="form-control text-orange-500">
                                            {{ date('Y-m-d H:i:s', strtotime($notification_service->date_check)) }}</p>
                                    </div>
                                    <div class="">
                                        <label class="form-label text-lead-500 ">Observaciones Finales:</label>
                                        <p class="form-control text-orange-500">
                                            {{ $notification_service->end_observations }}</p>
                                    </div>
                                @endisset

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
