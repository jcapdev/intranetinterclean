{{-- @extends('layouts.theme.tablero')
@section('content')
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
        <img src="{{ asset('img/Pleca ICSIntranet.png') }}" class="img-fluid">
    </div>

    <div class=" container-fluid" style="overflow-y: hidden;">
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
                            <th style="color: white;">Pais</th>
                            <th style="color: white;">Estado</th>
                            <th style="color: white;">Nombre</th>
                            <th style="color: white;">RFC</th>
                            <th style="color: white;">Tipo</th>
                            <th style="color: white;">Direccion</th>
                            <th style="color: white;">Codigo Postal</th>
                            <th style="color: white;">Telefono</th>
                            <th style="color: white;">Forma pago</th>
                            <th style="color: white;">Descripcion</th>
                            <th style="color: white;">Productos</th>
                            <th style="color: white;">Tipo de envio</th>
                            <th style="color: white;">Municipio</th>
                            <th style="color: white;">Correo Electronico</th>
                            <th style="color: white;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proveedor as $proveedor)
                            <tr>
                                <td>{{ $proveedor->pais_proveedor }}</td>
                                <td>{{ $proveedor->Estado_proveedor }}</td>
                                <td>{{ $proveedor->nombre_proveedor }}</td>
                                <td>{{ $proveedor->rfc_proveedor }}</td>
                                <td>{{ $proveedor->tipo_proveedor }}</td>
                                <td>{{ $proveedor->direccion_proveedor }}</td>
                                <td>{{ $proveedor->cp_proveedor }}</td>
                                <td>{{ $proveedor->telefono_proveedor }}</td>
                                <td>{{ $proveedor->forma_pago_proveedor }}</td>
                                <td>{{ $proveedor->descripcion }}</td>
                                <td>{{ $proveedor->productos }}</td>
                                <td>{{ $proveedor->tiposrevioprop }}</td>
                                <td>{{ $proveedor->municipio }}</td>
                                <td>{{ $proveedor->correo }}</td>
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

@endsection --}}
