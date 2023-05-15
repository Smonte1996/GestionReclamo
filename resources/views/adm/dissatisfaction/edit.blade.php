<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Servicio No Conforme</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 form-group pull-right top_search">
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
                            <h2>Editar Servicio No Conforme</h2>
                            {{-- <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul> --}}

                            <div class="clearfix"></div>
                        </div>
                        <div class="">
                            <a class="btn-orange-500 btn text-white btn-sm"
                                href="{{ route('adm.dissatisfaction_services.index') }}"><i
                                    class="fa fa-solid fa-arrow-left"></i> Regresar</a>
                        </div>
                        <div class="x_content">
                            <form
                                action="{{ route('adm.dissatisfaction_services.update', $dissatisfaction_service) }}"
                                method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-4 col-sm-12 col-md-12">
                                        <label for="" class="form-label fs-6 text-lead-500">Descripción</label>
                                        <textarea name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                                            aria-describedby="namehelpId" placeholder="Descripción del Servicio">{{ $dissatisfaction_service->name }}</textarea>
                                        @if ($errors->any())
                                            @error('name')
                                                <small id="namehelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        @endif
                                    </div>
                                    <div class="mb-4 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Tipo
                                            Notificación</label>
                                        <select name="notification_type" id="notification_type" class="form-select">
                                            <option value="">Selecciona una opción</option>
                                            <option @selected('ALERTA' == $dissatisfaction_service->notification_type) value="ALERTA">ALERTA</option>
                                            <option @selected('NO CONFORMIDAD' == $dissatisfaction_service->notification_type) value="NO CONFORMIDAD">NO CONFORMIDAD
                                            </option>
                                        </select>
                                        @if ($errors->any())
                                            @error('notification_type')
                                                <small id="namehelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        @endif
                                    </div>
                                    <div class="mb-4 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Procesos</label>
                                        <select name="activity_id" id="activity_id" class="form-select">
                                            <option value="">Selecciona una opción</option>
                                            @foreach ($activities as $activity)
                                                <option @selected($activity->id == $dissatisfaction_service->activity_id) value="{{ $activity->id }}">
                                                    {{ $activity->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->any())
                                            @error('activity_id')
                                                <small id="namehelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        @endif
                                    </div>
                                    <div class="mb-4 col-sm-12 col-md-4">

                                        <label for="" class="form-label fs-6 text-lead-500">Responsable</label>
                                        <select name="employee_id" id="employee_id" class="form-select select2">
                                            <option value="">Selecciona una opción</option>

                                            @foreach ($employees as $employee)
                                            @php
                                                $valor = false;
                                            @endphp
                                            @foreach ($dissatisfaction_service->responsibles as $responsible)
                                                @if ($employee->id == $responsible->employee->id)
                                                    @php
                                                        $valor = true;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            <option @selected($valor) value="{{ $employee->id }}">
                                                {{ $employee->name . ' ' . $employee->lastname }}</option>
                                        @endforeach
                                        </select>
                                        @if ($errors->any())
                                            @error('employee_id')
                                                <small id="namehelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        @endif
                                    </div>
                                    <div class="fs-5 mark">
                                        Listado de Acciones
                                    </div>
                                    <div class="row gy-1">
                                        @foreach ($actions as $action)
                                            @php
                                                $valor = false;
                                            @endphp
                                            @foreach ($dissatisfaction_service->actions as $actionss)
                                                @if ($action->id == $actionss->id)
                                                    @php
                                                        $valor = true;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            <div class="col-12 col-md-6">
                                                <label class="label">
                                                    <input @checked($valor) type="checkbox"
                                                        name="action_id[]" value="{{ $action->id }}">
                                                    <span class="float-rigth">{{ $action->name }}</span>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <x-jet-button type="submit">Modificar</x-jet-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
