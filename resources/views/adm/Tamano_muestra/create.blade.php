<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Niveles Estandar Militar</h3>
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
                            <h2>Registro de Niveles Estandar</h2>
                           
                            <div class="clearfix"></div>
                        </div>
                        <div class="">
                            <a class="btn-orange-500 btn text-white btn-sm" href="{{ route('adm.Tamaño_muestra.index') }}"><i
                                    class="fa fa-solid fa-arrow-left"></i>
                                Regresar</a>
                        </div>
                        <div class="x_content">
                            <form action="{{route('adm.Tamaño_muestra.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Niveles Estandar</label>
                                        <select class="form-control @error('Estandar') is-invalid @enderror" name="Estandar" id="Estandar">
                                            <option value="">Selecciona un Nivel</option>
                                             @foreach ($Niveles as $Nivele)
                                                <option value="{{ $Nivele->id }}">{{ $Nivele->name }}</option>
                                            @endforeach 
                                        </select>
                                       
                                            @error('Estandar')
                                                <small id="EstandarhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Tamaño de lote</label>
                                        <input type="text" class="form-control @error('Tamaño_lote') is-invalid @enderror"
                                            name="Tamaño_lote" id="Tamaño_lote"
                                            placeholder="Tamaño de lote" value="{{ old('Tamaño_lote') }}">
                                            @error('Tamaño_lote')
                                                <small id="Tamaño_lotehelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                     </div> --}}

                                    <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Nivel Tamaño</label>
                                        <input type="text" class="form-control @error('Nivel') is-invalid @enderror"
                                            name="Nivel" id="Nivel"
                                            placeholder="Nivel de tamaño" value="{{ old('Nivel') }}">
                                            @error('Nivel')
                                                <small id="NivelhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Muestra de lote</label>
                                            <input type="text" class="form-control @error('muestra') is-invalid @enderror"
                                                name="muestra" id="muestra"
                                                placeholder="Muestra de lote" value="{{ old('muestra') }}">
                                                @error('muestra')
                                                    <small id="muestrahelpId"
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