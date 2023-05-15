<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Clientes</h3>
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
                            <h2>Registro de Nuevo Cliente </h2>
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
                            <a class="btn-orange-500 btn text-white btn-sm" href="{{ route('adm.clients.index') }}"><i
                                    class="fa fa-solid fa-arrow-left"></i> Regresar</a>
                        </div>
                        <div class="x_content">
                            <form action="{{ route('adm.clients.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="mb-4 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Razón Social</label>
                                        <input type="text" class="form-control @error('social_reason') is-invalid @enderror"  name="social_reason" id="social_reason"
                                            aria-describedby="social_reasonhelpId" placeholder="Razón Social" value="{{ old('social_reason') }}">
                                        @if ($errors->any())
                                            @error('social_reason')
                                                <small id="social_reasonhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        @endif

                                    </div>
                                    <div class="mb-4 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">R.U.C</label>
                                        <input type="text" class="form-control @error('ruc') is-invalid @enderror"  name="ruc" id="ruc"
                                            aria-describedby="ruchelpId" placeholder="RUC" value="{{ old('ruc') }}">
                                        @if ($errors->any())
                                            @error('ruc')
                                                <small id="ruchelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
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
