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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-subtitle">Editar Perfil</h4>
                                <h4 class="card-title">Actualice sus datos de perfil.</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label>Zona</label>
                                                <input type="text" class="form-control" disabled="" placeholder="Company"
                                                    value="{{ Auth::user()->zona }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 px-1">
                                            <div class="form-group">
                                                <label>Usuario</label>
                                                <input type="text" class="form-control"
                                                    value="{{ Auth::user()->nombreUsuario }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Rol</label>
                                                <input type="text" class="form-control"
                                                    value="{{ Auth::user()->tipo_usuario }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control"
                                                    value="{{ Auth::user()->nombre }}">
                                            </div>
                                            <div class="form-group">
                                                <label> Estatus</label>
                                                <input type="text" class="form-control"
                                                    value="{{ Auth::user()->online }}">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Actualizar Datos</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-image">
                                <img src="https://interclean.live/intranet/img/InterCleanP.png" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar border-gray" src="{{ asset('img/faces/face-0.jpg') }} "
                                            alt="...">
                                        <h5 class="title">{{ Auth::user()->nombreUsuario }}</h5>
                                    </a>

                                </div>
                                <p class="description text-center">
                                    "Administrador {{ Auth::user()->tipo_usuario }}"
                                    <br>Area de : {{ Auth::user()->cliente }}
                                </p>
                            </div>
                            <hr>
                            <div class="button-container mr-auto ml-auto">
                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                    <i class="fa fa-facebook-square"></i>
                                </button>
                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                    <i class="fa fa-twitter"></i>
                                </button>
                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                    <i class="fa fa-google-plus-square"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

@endsection
