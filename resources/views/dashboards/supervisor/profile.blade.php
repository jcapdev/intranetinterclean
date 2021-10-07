@extends('layouts.theme.tablero')

@section('content')
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

      <div class="content">
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-xs-5 col-md-5 col-lg-5 col-xl-5">
                        <!-- Widget: user widget style 1 -->

                        <div class="card card-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header text-white"
                                style="background: url('{{ asset('img/photo1.png') }}') center center;">
                            <h3 class="widget-user-username text-right">{{ Auth::user()->nombreUsuario }}</h3>
                            {{-- <h5 class="widget-user-desc text-right">{{ Auth::user()->tipo_usuario }}</h5> --}}
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="{{ asset('img/user3-128x128.jpg') }}" alt="User Avatar">
                            
                            </div>
                            <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">

                                    <h3 class="widget-user-username text-center">Rol de Usuario</h3>
                                    <h5 class="widget-user-desc text-center">{{ Auth::user()->tipo_usuario }}</h5>

                                <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">

                                    <h3 class="widget-user-username text-center">Zona Asignada</h3>
                                    <h5 class="widget-user-desc text-center">{{ Auth::user()->zona }}</h5>

                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                             
                                    <h3 class="widget-user-username text-center">Cliente</h3>
                                    <h5 class="widget-user-desc text-center">{{ Auth::user()->cliente }}</h5>

                                <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.widget-user -->
                     </div>



                      <div class="col-xs-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-subtitle">Editar Perfil</h4>
                                            <h4 class="card-title">Actualice sus datos de perfil.</h4>
                                        </div>
                                        <div class="card-body">
                                            <form>

                                                <div class="row">

                                                    <div class="col-md-3 px-1">
                                                        <div class="form-group">
                                                            <label>Usuario</label>
                                                            <input type="text" class="form-control"  value="{{ Auth::user()->nombreUsuario }}" >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5 pr-1">
                                                        <div class="form-group">
                                                            <label>Nombre</label>
                                                            <input type="text" class="form-control" value="{{ Auth::user()->nombre }}">
                                                        </div>
                                                    </div>

                                                 

                                                    <div class="col-md-4 pl-1">
                                                        <div class="form-group">
                                                            <label>Zona</label>
                                                            <input type="text" class="form-control" disabled="true" placeholder="Company" value="{{ Auth::user()->zona }}">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-3 px-1">
                                                        <div class="form-group">
                                                            <label>Rol</label>
                                                            <input type="text" class="form-control"  value="{{ Auth::user()->tipo_usuario }}">
                                                        </div>
                                                    </div>

                                                        <div class="col-md-5 pr-1">
                                                            <div class="form-group">
                                                                <label> Estatus</label>
                                                                <input type="text" class="form-control"  value="{{ Auth::user()->online }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 pl-1">
                                                            <div class="form-group">
                                                                <label>Cliente</label>
                                                                <input type="text" class="form-control"  disabled="true" value="{{ Auth::user()->cliente }}">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <button type="submit" class="btn btn-info btn-fill pull-right">Actualizar Datos</button>
                                                    <div class="clearfix"></div>
                                                </div>



                                            </form>
                                        </div>
                                    </div>
                       </div>         
                 </div>



            </div>
       </div> 
</div>

@endsection
