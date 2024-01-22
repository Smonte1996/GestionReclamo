<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Registro Responsable de Pasillos</h3>
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
                            <h2>Registro Responsable de Pasillos</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="mb-3">
                            <a class="btn-orange-500 btn text-white btn-sm" href="{{route('adm.check.pasillos.index')}}"><i
                                    class="fa fa-solid fa-arrow-left"></i>
                                Regresar</a>
                        </div>
                        <div class="x_content">
                            <form action="{{route('adm.check.pasillos.store')}}" method="post">
                                @csrf
                                {{-- @method('PUT') --}}
                                <div class="row">
                                    <div class="mb-3 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">Zona Bodega</label>
                                        <select name="zona" class="form-select @error('zona') is-invalid @enderror" id="">
                                            <option value="">Seleccionar una opción</option>
                                            @foreach ($Zona as $zona)
                                                <option value="{{$zona->id}}">{{$zona->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('zona')
                                                <small id="zonahelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                    </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Pasillos</label>
                                            <input type="text" class="form-control rounded @error('Pasillos') is-invalid @enderror" name="Pasillos">
                                            @error('Pasillos')
                                                <small id="PasilloshelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                            
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Coordinador</label>
                                           <input type="text" class="form-control rounded @error('coordinador') is-invalid @enderror"
                                            name="coordinador" id="coordinador"  aria-describedby="coordinadorhelpId">
                                            @error('coordinador')
                                                <small id="coordinadorhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Supervisor</label>
                                           <select name="supervisor" id="supervisor" class="form-select  @error('supervisor') is-invalid @enderror">
                                            <option value="">seleccionar un opción</option>
                                            @foreach ($supervisores as $supervisor )
                                                <option class="text-uppercase" value="{{$supervisor->id}}">{{$supervisor->name}}</option>
                                            @endforeach
                                           </select>
                                            @error('supervisor')
                                                <small id="supervisorhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Responsables</label>
                                           <input type="text" class="form-control @error('responsable') is-invalid @enderror"
                                            name="responsable" id="responsable"  aria-describedby="responsablehelpId">
                                            @error('responsable')
                                                <small id="responsablehelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
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
