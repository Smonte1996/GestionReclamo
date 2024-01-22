<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/" class="ps-3 d-lg-none d-md-block"><img width="30" src="{{ asset('img/icono.png') }} "
                    alt=""> </a>
            <a href="/" class="ps-3 d-none d-lg-block"><img width="200"
                    src="{{ asset('img/logo-ransa.png') }} " alt=""> </a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <!-- <div class="profile clearfix">
              <div class="profile_pic">
                <img src="img/icono.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
              <div class="clearfix"></div>
            </div> -->
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    @switch(auth()->user()->userable_type)
                    @case('App\Models\Employee')
                        
                    <li><a><i class="fa fa-whmcs"></i> Administración <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            @can('adm.activities.index')
                                <li><a href="{{ route('adm.activities.index') }}">Procesos</a></li>
                            @endcan
                            @can('adm.positions.index')
                                <li><a href="{{ route('adm.positions.index') }}">Cargos Laborales</a></li>
                            @endcan
                            @can('adm.users.index')
                                <li><a href="{{ route('adm.users.index') }}">Usuarios</a></li>
                            @endcan
                            @can('adm.countries.index')
                                <li><a href="{{ route('adm.countries.index') }}">Paises</a></li>
                            @endcan
                            @can('adm.cities.index')
                                <li><a href="{{ route('adm.cities.index') }}">Ciudades</a></li>
                            @endcan
                            @can('adm.warehouses.index')
                                <li><a href="{{ route('adm.warehouses.index') }}">Almacenes</a></li>
                            @endcan
                            @can('adm.dissatisfaction_services.index')
                                <li><a>M. Servicio No Conforme<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="sub_menu"><a
                                                href="{{ route('adm.dissatisfaction_services.index') }}">Servicios No
                                                Conforme</a>
                                        </li>
                                        <li><a href="{{ route('adm.actions.index') }}">Acciones</a>
                                        </li>
                                    </ul>
                                </li>
                            @endcan
                            @can('adm.departaments.index')
                                <li><a href="{{ route('adm.departaments.index') }}">Departamentos</a></li>
                            @endcan
                            @can('adm.clients.index')
                                <li><a href="{{ route('adm.clients.index') }}">Clientes</a></li>
                            @endcan

                            @can('adm.suppliers.index')
                                <li><a href="{{ route('adm.suppliers.index') }}">Proveedores</a></li>
                            @endcan

                            @can('adm.employees.index')
                                <li><a href="{{ route('adm.employees.index') }}">Empleados</a></li>
                            @endcan
                            @can('adm.roles.index')
                                <li><a href="{{ route('adm.roles.index') }}">Roles</a></li>
                            @endcan
                            @can('adm.permissions.index')
                                <li><a href="{{ route('adm.permissions.index') }}">Permisos</a></li>
                            @endcan
                            <li><a>Adminstración Muestreo<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu">
                                        <a href="{{route('adm.Niveles.index')}}">Niveles Estandar</a>
                                    </li>
                                    <li class="sub_menu">
                                        <a href="{{ route('adm.Tamaño_muestra.index') }}">Tamaño de muestra</a>
                                    </li>
                                    <li class="sub_menu">
                                        <a href="{{ route('adm.Matriz.index') }}">Matriz de defecto</a>
                                    </li>
                                    <li class="sub_menu">
                                        <a href="{{ route('adm.Defectos.index') }}">Defectos</a>
                                    </li>
                                    <li class="sub_menu">
                                        <a href="{{ route('adm.Aql.index') }}">Aql de defecto</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-spell-check"></i> Check Calidad <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            @can('adm.General.index')
                            <li class="sub_menu"><a href="{{route('adm.practica.higiene')}}">Practicas de higiene Ransa</a></li>    
                            @endcan

                            @can('adm.General.index')
                            <li class="sub_menu"><a href="{{route('adm.Practica.Maquila')}}">Prácticas de higiene maquila</a></li>    
                            @endcan
                            
                            @can('adm.General.index')
                            <li class="sub_menu"><a href="{{route('adm.practica.Proveedor')}}">Prácticas de higiene proveedores (estiba y limpieza)</a></li>    
                            @endcan
                            @can('adm.General.index')
                            <li class="sub_menu"><a href="{{route('adm.Check.list')}}"> Formulario Check de Pasillo</a></li>
                            @endcan
                            
                        </ul>
                    </li>
                    
                    <li><a><i class="fa fa-whmcs"></i> Administración Calidad <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">       
                             @can('adm.General.index') 
                                <li><a href="{{ route('adm.General.index') }}">Causal General</a></li>
                              @endcan
                              @can('adm.General.index')
                             <li class=""><a
                                     href="{{ route('adm.Detalle.index') }}">Detalle Causal</a>
                             </li> 
                             @endcan
                             @can('adm.General.index')
                             <li><a>Adminstración Muestreo<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu"><a
                                        href="{{ route('adm.data_logisticas.index') }}">Data Logistica</a>
                                    </li>
                                </ul>
                             </li>
                             @endcan
                             @can('adm.General.index')
                             <li><a>Adminstración Pasillos<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu"><a
                                        href="{{ route('adm.check.pasillos.index') }}">Pasillos</a>
                                </li>
                                </ul>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Gestión Calidad <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            @can('notifications.index')
                                <li><a href="{{ route('notifications.index') }}">Servicio No Conforme</a></li>
                            @endcan
                            @can('notifications.index')
                            <li><a href="{{ route('adm.reclamo') }}">Reclamos </a></li>
                            @endcan
                            @can('notifications.index')
                            <li><a href="{{route('adm.Muestreos.container.index')}}">Muestreos - Contenedor </a></li>
                            @endcan
                            @can('notifications.index')
                            <li><a href="{{route('adm.p.h&g.index')}}">Practicas de higiene</a></li>    
                            @endcan
                            @can('notifications.index')
                            <li><a href="{{route('adm.pasillos.vista.index')}}">Checklist de pasillo</a></li>  
                            @endcan
        
                            {{-- <li><a href="form_advanced.html">Advanced Components</a></li>
                            <li><a href="form_validation.html">Form Validation</a></li>
                            <li><a href="form_wizards.html">Form Wizard</a></li>
                            <li><a href="form_upload.html">Form Upload</a></li>
                            <li><a href="form_buttons.html">Form Buttons</a></li> --}}
                        </ul>
                    </li>
                    @break
                    @case('App\Models\Client')
                    <li><a><i class="fa-solid fa-list-ul"></i> Listado Muestreo Cliente <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="sub_menu"><a
                                href="{{route('adm.clients.muestreo.index')}}">Muestreos</a>
                            </li>
                        </ul>
                    </li>
                    @break

                    @default
                            
                    @endswitch
                    {{-- <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="general_elements.html">General Elements</a></li>
                            <li><a href="media_gallery.html">Media Gallery</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="glyphicons.html">Glyphicons</a></li>
                            <li><a href="widgets.html">Widgets</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="inbox.html">Inbox</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="tables.html">Tables</a></li>
                            <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span
                                class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="chartjs.html">Chart JS</a></li>
                            <li><a href="chartjs2.html">Chart JS2</a></li>
                            <li><a href="morisjs.html">Moris JS</a></li>
                            <li><a href="echarts.html">ECharts</a></li>
                            <li><a href="other_charts.html">Other Charts</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                            <li><a href="fixed_footer.html">Fixed Footer</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
            {{-- <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="e_commerce.html">E-commerce</a></li>
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="project_detail.html">Project Detail</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="profile.html">Profile</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="page_403.html">403 Error</a></li>
                            <li><a href="page_404.html">404 Error</a></li>
                            <li><a href="page_500.html">500 Error</a></li>
                            <li><a href="plain_page.html">Plain Page</a></li>
                            <li><a href="login.html">Login Page</a></li>
                            <li><a href="pricing_tables.html">Pricing Tables</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#level1_1">Level One</a>
                            </li>
                            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu"><a href="level2.html">Level Two</a>
                                    </li>
                                    <li><a href="#level2_1">Level Two</a>
                                    </li>
                                    <li><a href="#level2_2">Level Two</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#level1_2">Level One</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                                class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
            </div> --}}

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings" href="#">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen" href="#">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock" href="#">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Salir" href="logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
