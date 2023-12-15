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
                            <a class="btn-orange-500 btn text-white btn-sm" href="{{ route('adm.Defectos.index') }}"><i
                                    class="fa fa-solid fa-arrow-left"></i>
                                Regresar</a>
                        </div>
                        <div class="x_content">
                            <form action="{{ route('adm.Defectos.store') }}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Matriz</label>
                                        <select class="form-control @error('matriz') is-invalid @enderror" name="matriz" id="matriz">
                                            <option value="">Selecciona un opcion</option>
                                              @foreach ($matrices as $matrice)
                                                <option value="{{ $matrice->id }}">{{$matrice->name}} - {{$matrice->marca}}</option>
                                            @endforeach 
                                        </select>
                                       
                                            @error('matriz')
                                                <small id="matrizhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Defecto</label>
                                        <input type="text" class="form-control @error('defecto') is-invalid @enderror"
                                            name="defecto" id="defecto"
                                            placeholder="Matriz de defecto" value="{{ old('defecto') }}">
                                            @error('defecto')
                                                <small id="defectohelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                     </div>
                                      
                                     <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Descripcion</label>
                                        <input type="text" class="form-control @error('descripcion') is-invalid @enderror"
                                            name="descripcion" id="descripcion"
                                            placeholder="descripcion" value="{{ old('descripcion') }}">
                                            @error('descripcion')
                                                <small id="descripcionhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                     </div>

                                     <div class="mb-3">
                                        <div class="col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Descripcion</label>
                                        <input type="text" class="form-control @error('clasificacion') is-invalid @enderror"
                                            name="clasificacion" id="clasificacion"
                                            placeholder="clasificacion" value="{{ old('clasificacion') }}">
                                            @error('clasificacion')
                                                <small id="clasificacionhelpId"
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