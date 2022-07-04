<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Empleados</h3>
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
                            <h2>Registro de Nuevo Empleado </h2>
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
                                href="{{ route('adm.employees.index') }}"><i class="fa fa-solid fa-arrow-left"></i>
                                Regresar</a>
                        </div>
                        <div class="x_content">
                            <form action="{{ route('adm.employees.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <div class="mb-2">
                                            <label for="" class="form-label fs-6 text-lead-500">Nombres</label>
                                            <input type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                id="name" aria-describedby="namehelpId" placeholder="Nombres"
                                                value="{{ old('name') }}">
                                            @if ($errors->any())
                                                @error('name')
                                                    <small id="namehelpId"
                                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="mb-2">
                                            <label for="" class="form-label fs-6 text-lead-500">Apelidos</label>
                                            <input type="text"
                                                class="form-control @error('lastname') is-invalid @enderror"
                                                name="lastname" id="lastname" aria-describedby="lastnamehelpId"
                                                placeholder="Apellidos" value="{{ old('lastname') }}">
                                            @if ($errors->any())
                                                @error('lastname')
                                                    <small id="lastnamehelpId"
                                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="mb-2">
                                            <label for="" class="form-label fs-6 text-lead-500">Cédula</label>
                                            <input type="text"
                                                class="form-control @error('identification_card') is-invalid @enderror"
                                                name="identification_card" id="identification_card"
                                                aria-describedby="identification_cardhelpId" placeholder="Cédula"
                                                value="{{ old('identification_card') }}">
                                            @if ($errors->any())
                                                @error('identification_card')
                                                    <small id="identification_cardhelpId"
                                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="mb-2">
                                            <label for="" class="form-label fs-6 text-lead-500">Cargo</label>
                                            <select class="form-control @error('position') is-invalid @enderror"
                                                placeholder="Cargo" name="position_id" id="position_id">
                                                @foreach ($positions as $position)
                                                    <option value="{{ $position->id }}">{{ $position->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                @error('position')
                                                    <small id="positionhelpId"
                                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="mb-2">
                                            <label for="" class="form-label fs-6 text-lead-500">Bodega</label>
                                            <select class="form-control select2" name="warehouse_id" id="warehouse_id">
                                                <option value="">Selecciona una Bodega</option>
                                                @foreach ($warehouses as $warehouse)
                                                    <option value="{{ $warehouse->id }}">{{ $warehouse->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                @error('warehouse_id')
                                                    <small id="warehouse_idhelpId"
                                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="mb-2">
                                            <label for=""
                                                class="form-label fs-6 text-lead-500">Departamento:</label>
                                            <select class="form-control select2" name="departament_id"
                                                id="departament_id">
                                                <option value="">Selecciona una Departamento</option>
                                                @foreach ($departaments as $departament)
                                                    <option value="{{ $departament->id }}">
                                                        {{ $departament->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                @error('departament_id')
                                                    <small id="departament_idhelpId"
                                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="mb-2">
                                            <label for=""
                                                class="form-label fs-6 text-lead-500">Clientes:</label>
                                            <select multiple class="form-control select2"
                                                data-placeholder="Selecciona un cliente" name="client_id[]"
                                                id="client_id">
                                                @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}">
                                                        {{ $client->social_reason . ' - ' . $client->ruc }} </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                @error('client_id')
                                                    <small id="client_idhelpId"
                                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="mb-2">
                                            <label for="" class="form-label fs-6 text-lead-500">¿Es lider de
                                                un
                                                grupo?</label>
                                            <select class="form-control select2" name="leader" id="leader">
                                                <option value="true">Si</option>
                                                <option value="false">No</option>
                                            </select>
                                            @if ($errors->any())
                                                @error('leader')
                                                    <small id="leaderhelpId"
                                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="mb-2">
                                            <label for="" class="form-label fs-6 text-lead-500">Escoge un
                                                lider</label>
                                            <select class="form-control select2"
                                                data-placeholder="Selecciona el lider del empleado" name="employee_id"
                                                id="employee_id">
                                                <option value="">Selecciona un lider</option>
                                                @foreach ($employees as $employee)
                                                    <option value="{{ $employee->id }}">
                                                        {{ $employee->name . ' - ' . $employee->lastname }} </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                @error('employee_id')
                                                    <small id="employee_idhelpId"
                                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <x-jet-button type="submit">Registrar</x-jet-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
