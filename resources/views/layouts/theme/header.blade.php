        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light sticky-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->nombreUsuario }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <h2 class="dropdown-header">
                                @if (Auth::check() && Auth::user()->tipo_usuario == 'AD')
                                Administrador
                                @elseif(Auth::check() && Auth::user()->tipo_usuario == "SP")
                                Supervisor
                                @endif
                            </h2>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span>
                                    {{ __('Cerrar Sesion') }}
                                </span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>

        {{-- <nav class="navbar sticky-top  navbar-expand-lg" color-on-scroll="500" style="background-color: rgb(11, 88, 172);">
    <div class="container-fluid">
        <a class="navbar-brand" href="#pablo"> 
         </a>
        <button href="#" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav mr-auto">
                <a style="color: rgb(255, 255, 255); font-weight:800; letter-spacing: 5px; text-transform:uppercase; display:flex; justify-content: center; ">
                    {{ Auth::user()->tipo_usuario }}
                </a>
                <span> {{(' ') }}</span> 
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="dropdown nav-item" >
                    <a href="#" style="color: rgb(255, 255, 255);" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="nc-icon nc-bell-55"></i>
                        <span class="notification">1</span>
                        <span class="d-lg-none">Notificaciones</span>
                    </a>
                    <ul class="dropdown-menu" x-placement="bottom-start" style="transform: translate(-30px,2px,0px); top: 0px left:0px will-change:transform;" >
                        <a class="dropdown-item" href="#">Notification 1</a>
                        <a class="dropdown-item" href="#">Notification 2</a>
                        <a class="dropdown-item" href="#">Notification 3</a>
                    </ul>
                </li>

                @if (Auth::check() && Auth::user()->tipo_usuario == 'AD')

                <li class="nav-item" >
                    <a class="nav-link" style="color: rgb(255, 255, 255);"   href="{{ route('admin.profile') }}"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="no-icon">
                            {{ Auth::user()->nombreUsuario }}
                        </span>
                    </a>
                </li>

                @elseif(Auth::check() && Auth::user()->tipo_usuario == "SP")

                <li class="nav-item" >
                    <a class="nav-link" style="color: rgb(255, 255, 255);"  href="{{ route('supervisor.profile') }}"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="no-icon">
                            {{ Auth::user()->nombreUsuario }}
                        </span>
                    </a>
                </li>

                @endif
                <li class="nav-item" >
                    <a class="nav-link" style="color: rgb(255, 255, 255);" href="{{ route('logout') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span>
                            {{ __('Cerrar Sesion') }}
                        </span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
