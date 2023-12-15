<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Aql de defecto</h3>
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
                            <h2>Registro de Aql de defecto</h2>
                           
                            <div class="clearfix"></div>
                        </div>
                        <div class="">
                            <a class="btn-orange-500 btn text-white btn-sm" href="{{route('adm.Aql.index')}}"><i
                                    class="fa fa-solid fa-arrow-left"></i>
                                Regresar</a>
                        </div>
                        <div class="x_content">
                            <form action="{{route('adm.Aql.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Letra de nivel</label>
                                        <select class="form-control @error('letra_nivel') is-invalid @enderror" name="letra_nivel" id="letra_nivel">
                                            <option value="">Selecciona un letra Nivel</option>
                                             @foreach ($Tamaño as $Tamaños)
                                                <option value="{{ $Tamaños->id }}">{{$Tamaños->nivele_estandars->name}} - {{$Tamaños->nivel}}-{{$Tamaños->muestra}}</option>
                                            @endforeach 
                                        </select>
                                       
                                            @error('sku')
                                                <small id="skuhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    {{-- <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Matriz</label>
                                        <select class="form-control @error('Matriz') is-invalid @enderror" name="Matriz" id="Matriz">
                                            <option value="">Selecciona un Matriz</option>
                                             @foreach ($Matriz as $matri)
                                                <option value="{{ $matri->id }}">{{$matri->name}}</option>
                                            @endforeach 
                                        </select>
                                       
                                            @error('Matriz')
                                                <small id="MatrizhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    {{-- <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Marca de def</label>
                                        <input type="text" class="form-control @error('Marca') is-invalid @enderror"
                                            name="Marca" id="Marca"
                                            placeholder="Marca del Producto" value="{{ old('Marca') }}">

                                            @error('Marca')
                                                <small id="MarcahelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    

                                    <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Aql</label>
                                        <input type="text" class="form-control @error('aql') is-invalid @enderror"
                                            name="aql" id="aql"
                                            placeholder="Aql de defecto" value="{{ old('aql') }}">
                                            @error('aql')
                                                <small id="aqlhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Nivel de aceptación</label>
                                            <input type="text" class="form-control @error('nivel_aceptacion') is-invalid @enderror"
                                                name="aceptacion" id="nivel_aceptacion"
                                                placeholder="Nivel de aceptación" value="{{ old('nivel_aceptacion') }}">
                                                @error('nivel_aceptacion')
                                                    <small id="nivel_aceptacionhelpId"
                                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div> 
                                        <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Rechazo</label>
                                        <input type="text" class="form-control @error('Defecto') is-invalid @enderror"
                                            name="rechazo" id="Defecto"
                                            placeholder="Defecto del Producto" value="{{ old('Defecto') }}">
                                            @error('Defecto')
                                                <small id="DefectohelpId"
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