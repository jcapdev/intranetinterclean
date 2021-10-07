@extends('layouts.theme.tablero')
@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.11.1/i18n/es_es.json"></script>
    <style>
        .titulo {
            font-size: 1.5rem;
        }

        .limitador {
            height: 650px;
            width: 1550px;
        }

        .limitador table {
            width: 1550px;
        }

        .pleca {
            padding: 1rem;
            margin: 1rem 0rem;
            font-size: 1.7rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: white;
            background-color: #0b59ac;
        }

        thead th {
            background-color: #06478d;
        }

        table.dataTable td {
            font-size: 0.74em;
        }

        .table>thead>tr>th {
            font-size: 0.78em;
        }

        .div-img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

    </style>

    <div>
        <img src="https://interclean.live/intranet/formularios-inter/imagen/banner3.png" class="img-fluid" width="100%" height="auto">
    </div>

    <div class=" container-fluid"
            style="overflow-y: hidden;">
        {{-- <div class="pleca">
            <div class="row text-center ">
                <div class="container-fluid col-sm-3" style="display:flex; justify-content:center; align-items:center;">
                    <div>
                        <h2 class="titulo">Proveedores</h2>
                    </div>
                </div>
                <div class="col-sm-6" style="display:flex; justify-content:center; align-items:center;">

                </div>
                <div class="col-sm-3" style="display:flex; justify-content:center;  align-items:center;">
                    <a class="btn btn-success" type="button"
                        style="margin: 2px; border-radius:2rem; font-size:1.5rem; background-color:rgb(33, 189, 19); color: white;">
                        <ion-icon name="add-circle"></ion-icon>
                    </a>
                    <a class="btn btn-primary" type="button"
                        style="margin: 2px; border-radius:2rem; font-size:1.5rem; background-color:rgb(19, 107, 189); color: white;">
                        <ion-icon name="create"></ion-icon>
                    </a>
                    <a class="btn btn-danger" type="button"
                        style="margin: 2px; border-radius:2rem; font-size:1.5rem; background-color:rgb(189, 19, 19); color: white;">
                        <ion-icon name="trash"></ion-icon>
                    </a>
                </div>
            </div>
        </div> --}}

        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-outline-primary pull-right mt-3 mb-2">Agregar</button>
            </div>
        </div>

        <div class=" card">
            <div class="card-body table-responsive">
                <table class="table table-striped" id="proveedor">
                    <thead>
                        <tr>
                            <th style="color: white;">Descripcion</th>
                            <th style="color: white;">fecha</th>
                            <th style="color: white;">imagen</th>
                            <th style="color: white;">status</th>
                            <th style="color: white;">Sucursal</th>
                            <th style="color: white;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventario as $inventario)
                            <tr>
                                <td>{{ $inventario->descripcion }}</td>
                                <td>{{ $inventario->fecha }}</td>
                                <td>{{ $inventario->imagen }}</td>
                                <td>{{ $inventario->status }}</td>
                                <td>{{ $inventario->Sucursal }}</td>
                                <td>
                                    <input class="btn btn-info" type="button" value="Editar" style="background-color: rgb(0, 162, 255); color:white;">
                                    <input class="btn btn-danger" type="button" value="Eliminar" style="background-color: rgba(255, 0, 0, 0.842); color:white;">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#proveedor').DataTable({
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
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons/dist/ionicons/ionicons.js"></script>

@endsection
