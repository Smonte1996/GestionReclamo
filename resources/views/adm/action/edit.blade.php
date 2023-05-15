<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Acción</h3>
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
                            <h2>Editar Acción</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="">
                            @can('adm.actions.index')
                                <a class="btn-orange-500 btn text-white btn-sm" href="{{ route('adm.actions.index') }}"><i
                                        class="fa fa-solid fa-arrow-left"></i> Regresar</a>
                            @endcan
                        </div>
                        <div class="x_content">
                            <form action="{{ route('adm.actions.update', $action) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-4 col-sm-12 col-md-12">
                                        <label for="" class="form-label fs-6 text-lead-500">Accion</label>
                                        <textarea class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                            aria-describedby="namehelpId" placeholder="Editar Acción">{{ $action->name }}</textarea>
                                        @if ($errors->any())
                                            @error('name')
                                                <small id="namehelpId"
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
