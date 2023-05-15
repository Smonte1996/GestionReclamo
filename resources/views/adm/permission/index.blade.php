<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Permisos</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
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
                            <h2>Listado de Permisos </h2>
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
                        <div class="d-inline-flex">
                            <a class="btn-green-500 btn text-white btn-sm"
                                href="{{ route('adm.permissions.create') }}">Registrar</a>
                            <form action="{{ route('adm.permissions.import') }} " method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="btn-group btn-group-sm" role="group"
                                    aria-label="Basic mixed styles example">
                                    <input type="file" class="form-control form-control-sm" id="filexlsx"
                                        aria-describedby="inputGroupFileAddon04" name="filexlsx" aria-label="Upload">
                                    <button class="btn btn-green-500 text-white" type="submit"
                                        id="inputGroupFileAddon04">Importar</button>
                                </div>
                            </form>
                        </div>
                        <div class="x_content">
                            <table id="table_permissions" class="table align-middle table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>guard_name</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
