<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Almacenes</h3>
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
                            <h2>Editar Almacén</h2>
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
                            <a class="btn-orange-500 btn text-white btn-sm" href="{{ route('adm.warehouses.index') }}"><i
                                    class="fa fa-solid fa-arrow-left"></i> Regresar</a>
                        </div>
                        <div class="x_content">
                            <form action="{{ route('adm.warehouses.update', $warehouse) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-4 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">{{ __('Almacén') }}</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" aria-describedby="namehelpId"
                                            placeholder="Editar Almacén" value="{{ $warehouse->name }}">
                                        @if ($errors->any())
                                            @error('name')
                                                <small id="namehelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        @endif
                                    </div>

                                    <div class="mb-4 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">{{ __('Ciudad') }}</label>

                                        <select class="form-control" name="city_id" id="city_id">
                                            <option value="">Selecciona un Pais</option>
                                            @foreach ($cities as $city)
                                                <option @if ($city->name == $warehouse->city->name)
                                                    selected
                                                @endif value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->any())
                                            @error('city_id')
                                                <small id="city_idhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        @endif
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
