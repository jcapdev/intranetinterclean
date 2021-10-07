@if (Auth::check() && Auth::user()->tipo_usuario == 'AD')
    {{-- Administrador --}}
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <a href="{{ route('admin.dashboard') }}">
                <img src="http://interclean.mx/img/intercleanlogoblanco.svg" class="brand-image" style="opacity: .8">
                {{-- <span class="brand-text font-weight-light">InterClean</span> --}}
            </a>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Usuario</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.profile') }}">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Perfil de Usuario</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.usuariol') }}">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p> Usuarios conectados</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.control') }}">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Control Diario</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.incidencias') }}">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Incidencias</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Inventario
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.inventario') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inventario InterClean</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.proveedores') }}">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Proveedores</p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

@elseif(Auth::check() && Auth::user()->tipo_usuario == "SP")

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a class="brand-link">
            <a href="{{ route('admin.dashboard') }}">
                <img src="http://interclean.mx/img/intercleanlogoblanco.svg" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
                {{-- <span class="brand-text font-weight-light">InterClean</span> --}}
            </a>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                <div class="image">
                    <img src="https://toppng.com/uploads/preview/circled-user-icon-user-pro-icon-11553397069rpnu1bqqup.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Usuario</a>
                </div>

            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('supervisor.profile') }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Perfil de Usuario</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supervisor.entregables') }}">
                            <i class="nav-icon fas fa-folder-open"></i>
                            <p>Entregables</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supervisor.prospectos') }}">
                            <i class="nav-icon fas fa-id-card"></i>
                            <p>Prospectos</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supervisor.plantillaregional') }}">
                            <i class="nav-icon fas fa-atlas"></i>
                            <p>Plantilla Regional</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supervisor.cubredescanzo') }}">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>Cubre descanzo</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas  fa-clipboard-check"></i>
                            <p>
                            Control Diario
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('supervisor.asistencia') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Asistencias</p>
                                </a>
                                <a class="nav-link" href="{{ route('supervisor.reportes') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Reportes</p>
                                </a>
                            </li>
                        </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.proveedores') }}">
                                <i class="nav-icon fas fa-truck"></i>
                                <p>Proveedores</p>
                            </a>
                        </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supervisor.centrottrabajo') }}">
                            <i class="nav-icon fas fas fa-city"></i>
                            <p>Centros de Trabajo</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supervisor.cotizacion') }}">
                            <i class="nav-icon fas fa-dollar-sign"></i>
                            <p>Cotizacion</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supervisor.sanitizacion') }}">
                            <i class="nav-icon fas fa-hands-wash"></i>
                            <p>Sanitizacion</p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supervisor.incidencias') }}">
                            <i class="nav-icon fas fa-exclamation-circle"></i>
                            <p>Incidencias</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supervisor.descargables') }}">
                            <i class="nav-icon fas fa-download"></i>
                            <p>Descargables</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supervisor.tickets') }}">
                            <i class="nav-icon fas fa-ticket-alt"></i>
                            <p>Tickets</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supervisor.vacantes') }}">
                            <i class="nav-icon fas fa-male"></i>
                            <p>Vacantes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supervisor.acta') }}">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Actas Administrativas</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>



@endif






















{{-- @if (Auth::check() && Auth::user()->tipo_usuario == 'AD')
        <div class="sidebar" data-image="{{ asset('img/sidebar-4.jpg') }}">
            <div class="sidebar-wrapper" style="overflow: hidden;">
                <div class="logo">
                    <a href="{{ route('admin.dashboard') }}" class="simple-text">
                        <h4>InterClean</h4>
                    </a>
                </div>
                <div class="m1 menu">
                    <ul class="nav">
                        <li>
                            <a class="nav-link " href="{{ route('admin.dashboard') }}">
                                <ion-icon name="home"></ion-icon>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.profile') }}">
                                <ion-icon name="person"></ion-icon>
                                <p>Perfil de Usuario</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('admin.usuariol') }}">
                                <ion-icon name="people"></ion-icon>
                                <p> Usuarios conectados</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('admin.control') }}">
                                <ion-icon name="bookmarks"></ion-icon>
                                <p>Control Diario</p>
                            </a>
                        </li> --}}
{{-- <li>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-paper-2"></i>
                                Coordinacion
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="">Coordinacion 1</a>
                                <a class="dropdown-item" href="#">Coordinacion 2</a>
                            </div>
                        </div>
                    </li> --}}
{{-- <li>
                            <a class="nav-link" href="{{ route('admin.incidencias') }}">
                                <ion-icon name="warning"></ion-icon>
                                <p>Incidencias</p>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <ion-icon name="cube"></ion-icon>
                                    Inventario
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('admin.inventario') }}"> Inventario
                                        InterClean</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('admin.proveedores') }}">
                                <ion-icon name="cart"></ion-icon>
                                <p>Proveedores</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}

{{-- @elseif(Auth::check() && Auth::user()->tipo_usuario == "SP")
<div class="sidebar" data-image="{{ asset('img/sidebar-1.jpg') }}">
    <div class="sidebar-wrapper" style="overflow-x: hidden;">
        <div class="logo">
            <a href="{{ route('supervisor.dashboard') }}" class="simple-text">
                <img src="https://www.interclean.mx/img/intercleanlogoblanco.svg" alt="">
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link " href="{{ route('supervisor.dashboard') }}"><i
                        class="nc-icon nc-grid-45"></i>
                    <p>Inicio</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{ route('supervisor.profile') }}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>Perfil de Usuario</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.entregables') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>Entregables</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.prospectos') }}">
                    <i class="nc-icon nc-notes"></i>
                    <p>Prospectos</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.plantillaregional') }}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Plantilla Regional</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.cubredescanzo') }}">
                    <i class="nc-icon nc-time-alarm"></i>
                    <p>Cubre descanzo</p>
                </a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nc-icon nc-notes"></i>
                        Control Diario
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"
                        style="background-color: rgb(20, 87, 185, 95%); position: absolute; transform: translate3d(101px, 50px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" style="color: white"
                            href="{{ route('supervisor.asistencia') }}">Asistencias</a>
                        <a class="dropdown-item" style="color: white"
                            href="{{ route('supervisor.reportes') }}">Reportes</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.centrottrabajo') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Centros de Trabajo</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.cotizacion') }}">
                    <i class="nc-icon nc-money-coins"></i>
                    <p>Cotizacion</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.sanitizacion') }}">
                    <i class="nc-icon nc-umbrella-13"></i>
                    <p>Sanitizacion</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.proveedores') }}">
                    <i class="nc-icon nc-delivery-fast"></i>
                    <p>Proveedores</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.incidencias') }}">
                    <i class="nc-icon nc-simple-remove"></i>
                    <p>Incidencias</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.descargables') }}">
                    <i class="nc-icon nc-tap-01"></i>
                    <p>Descargables</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.tickets') }}">
                    <i class="nc-icon nc-tag-content"></i>
                    <p>Tickets</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.vacantes') }}">
                    <i class="nc-icon nc-badge"></i>
                    <p>Vacantes</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('supervisor.acta') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Actas Administrativas</p>
                </a>
            </li>
        </ul>
    </div>
</div>
@endif --}}
