<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Matriz de defecto</h3>
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
                            <h2>Registro de Matriz de defecto</h2>
                           
                            <div class="clearfix"></div>
                        </div>
                        <div class="">
                            <a class="btn-orange-500 btn text-white btn-sm" href="{{ route('adm.Matriz.index') }}"><i
                                    class="fa fa-solid fa-arrow-left"></i>
                                Regresar</a>
                        </div>
                        <div class="x_content">
                            <form action="{{ route('adm.Matriz.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Defecto Primario</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name"
                                            placeholder="Matriz de defecto" value="{{ old('name') }}">
                                            @error('name')
                                                <small id="namehelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                     </div>
                                      
                                     <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Marca</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="marca" id="marca"
                                            placeholder="Marca" value="{{ old('marca') }}">
                                            @error('marca')
                                                <small id="marcahelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
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