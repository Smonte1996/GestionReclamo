<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Usuarios</h3>
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
                            <h2>Registro de Nuevo Usuario </h2>
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
                            <a class="btn-orange-500 btn text-white btn-sm" href="{{ route('adm.users.index') }}"><i
                                    class="fa fa-solid fa-arrow-left"></i> Regresar</a>
                        </div>
                        <div class="x_content">
                            <form action="{{ route('adm.users.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="mb-4 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Nombres</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" aria-describedby="namehelpId" placeholder="Nombres" value="{{ old('name') }}">
                                        @if ($errors->any())
                                            @error('name')
                                                <small id="namehelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        @endif
                                    </div>
                                    <div class="mb-4 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Correo Electrónico</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" aria-describedby="emailhelpId"
                                            placeholder="Correo Electrónico" value="{{ old('email') }}">
                                        @if ($errors->any())
                                            @error('email')
                                                <small id="emailhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        @endif
                                    </div>
                                    <div class="mb-4 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Contraseña</label>
                                        <input type="text" class="form-control @error('password') is-invalid @enderror"
                                            name="password" id="password" aria-describedby="passwordhelpId"
                                            placeholder="Contraseña" value="{{ old('password') }}">
                                        @if ($errors->any())
                                            @error('password')
                                                <small id="passwordhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        @endif
                                    </div>
                                    <div x-data="{
                                        textselect: 0
                                    }">
                                        <div class="mb-4 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Tipo de Usuario</label>
                                            <select class="form-control" data-placeholder="Selecciona Cliente"
                                                name="tipo_user" id="tipo_user" x-model="textselect">
                                                <option value="0">Ransa</option>
                                                <option value="1">Cliente</option>
                                                <option value="2">Proveedor</option>
                                            </select>
                                            @if ($errors->any())
                                                @error('tipo_user')
                                                    <small id="tipo_userhelpId"
                                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            @endif
                                        </div>

                                        <div class="mb-4 col-sm-12 col-md-4" x-show="textselect == 0">
                                            <label for="" class="form-label fs-6 text-lead-500">Personal</label>
                                            <select class="form-control @error('employee_id') is-invalid @enderror"
                                                placeholder="Selecciona Personal que se creará usuario"
                                                name="employee_id" id="employee_id">
                                                <option value="">Seleccionar un personal</option>
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
                                        <div class="mb-4 col-sm-12 col-md-4" x-show="textselect == 1">
                                            <label for="" class="form-label fs-6 text-lead-500">Cliente</label>
                                            <select class="form-control"
                                                data-placeholder="Selecciona Cliente que se creará usuario"
                                                name="client_id" id="client_id">
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
                                        <div class="mb-4 col-sm-12 col-md-4" x-show="textselect == 2">
                                            <label for="" class="form-label fs-6 text-lead-500">Proveedor</label>
                                            <select class="form-control"
                                                data-placeholder="Selecciona Proveedor que se creará usuario"
                                                name="supplier_id" id="supplier_id">
                                                @foreach ($suppliers as $supplier)
                                                    <option value="{{ $supplier->id }}">
                                                        {{ $supplier->social_reason . ' - ' . $supplier->ruc }} </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                @error('supplier_id')
                                                    <small id="supplier_idhelpId"
                                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            @endif
                                        </div>                                                                                
                                    </div>
                                    <div class="mb-4 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Roles</label>
                                        <select class="form-control"
                                            data-placeholder="Selecciona el rol "
                                            name="role_id" id="role_id">
                                            <option value="">Selecciona un rol</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">
                                                    {{ $role->name}} </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->any())
                                            @error('role_id')
                                                <small id="role_idhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        @endif
                                    </div>
                                    <div class="mb-4 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Permisos</label>
                                        <select class="form-control"
                                            data-placeholder="Selecciona los permisos"
                                            name="permission_id" id="permission_id">
                                            <option value="">Selecciona un permiso</option>
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->id }}">
                                                    {{ $permission->name}} </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->any())
                                            @error('permission_id')
                                                <small id="permission_idhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        @endif
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
