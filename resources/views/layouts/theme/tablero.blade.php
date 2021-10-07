<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sistema InterClean</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- INCLUDE DE LOS ESTILOS -->
    @include('layouts.theme.styles')
    <!-- INCLUDE DE LOS ESTILOS -->
</head>

{{-- <body>
    <div class="wrapper"> --}}

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('img/logoICDash.png') }}" sheight="60" width="60">
        </div>
        <!-- Navbar -->
        @include('layouts.theme.header')
        <!-- End Navbar -->
        <!-- Sidebar -->
        @include('layouts.theme.sidebar')
        <!-- Sidebar -->

        <!-- AQUI VA EL CONTENIDO DE CADA SECCION-->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="layout-px-spacing">
                        @yield('content')
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- AQUI VA EL CONTENIDO DE CADA SECCION-->
        <!-- Aqui va el footer -->
        @include('layouts.theme.footer')
        <!-- Aqui va el footer -->
    </div>
    <!-- Herramienta Flotante -->
    {{-- @include('admin.personalizar') --}}
    <!-- Herramienta Flotante -->
    @include('layouts.theme.scripts')

</body>

</html>
