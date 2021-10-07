@extends('layouts.theme.tablero')
@section('content')

    <div>
        <img src="{{ asset('img/usuarios.png') }}" class="img-fluid">
    </div>

    <div class=" container-fluid" style="overflow-y: hidden;">
        <div class="row">
            <div class="col-lg-12">
                {{-- <button type="button" class="btn btn-outline-primary pull-right mt-3 mb-2">Agregar</button> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="@mdo">Agregar</button>
            </div>
        </div>

        <div class=" card">
            <div class="card-body table-responsive">
                <table class="table table-striped" id="usuariosl">
                    <thead>
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Online</th>
                            <th>Tipo de Usuario</th>
                            <th>Zona Asignada</th>
                            <th>Cliente</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuario as $usuarios)
                            <tr>
                                <td>{{ $usuarios->nombre }}</td>
                                <td>{{ $usuarios->nombreUsuario }}</td>
                                <td>{{ $usuarios->password }}</td>
                                <td>{{ $usuarios->online }}</td>
                                <td>{{ $usuarios->tipo_usuario }}</td>
                                <td>{{ $usuarios->zona }}</td>
                                <td>{{ $usuarios->cliente }}</td>
                                <td>{{ $usuarios->Estatus }}</td>
                                <td>
                                    <input class="btn btn-info" type="button" value="Editar"
                                        style="background-color: rgb(0, 162, 255); color:white;">
                                    <input class="btn btn-danger" type="button" value="Eliminar"
                                        style="background-color: rgba(255, 0, 0, 0.842); color:white;">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- MODAL DE EDITAR Y ELIMINAR --}}

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open
        modal for @fat</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL DE EDITAR Y ELIMINAR --}}
    <script>
        $(document).ready(function() {
            $('#usuariosl').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.1/i18n/es_es.json'
                },
                deferRender: true,
                scroller: true,
                scrollCollapse: true,
                scrollY: 300
            });
        });
    </script>


@endsection
