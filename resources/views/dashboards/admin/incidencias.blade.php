@extends('layouts.theme.tablero')
@section('content')
    <style>
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

    </style>

    <div class="container-fluid" style="overflow-y: hidden;">
        <div class="pleca">
            <div class="row text-center ">
                <div class="container-fluid col-sm-3" style="display:flex; justify-content:center; align-items:center;">
                    <div>
                        <h2 class="titulo">Incidencias</h2>
                    </div>
                </div>
                <div class="col-sm-6" style="display:flex; justify-content:center; align-items:center;">
                </div>
                <div class="col-sm-3" style="display:flex; justify-content:center;  align-items:center;">
                    <a class="btn btn-success" type="button"
                        style="margin: 2px; border-radius:2rem; font-size:1.5rem; background-color:rgb(33, 189, 19); color: white;">
                        <i class="fas fa-plus-circle"></i>
                    </a>
                    <a class="btn btn-primary" type="button"
                        style="margin: 2px; border-radius:2rem; font-size:1.5rem; background-color:rgb(19, 107, 189); color: white;">
                        <i class="far fa-edit"></i>
                    </a>
                    <a class="btn btn-danger" type="button"
                        style="margin: 2px; border-radius:2rem; font-size:1.5rem; background-color:rgb(189, 19, 19); color: white;">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="limitador">
            <table class="table table-fluid sombreado" id="proveedor">
                <thead>
                    <tr>
                        <th style="color: white;">Fecha Incidencia</th>
                        <th style="color: white;">Cliente</th>
                        <th style="color: white;">Zona</th>
                        <th style="color: white;">Sucursal</th>
                        <th style="color: white;">Supervisor</th>
                        <th style="color: white;">Empleado</th>
                        <th style="color: white;">Incidencia</th>
                        <th style="color: white;">Documento</th>
                        <th style="color: white;">Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>16/05/2021</td>
                        <td>DHL</td>
                        <td>Sur</td>
                        <td>Ejemplo-Mayorazgo</td>
                        <td>Jannet Medina</td>
                        <td>Juan Carlos Boodoque</td>
                        <td>Faltas</td>
                        <td>asistencias.pdf&nbsp;<i class="fas fa-file-download"></i>
                        </td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>16/05/2021</td>
                        <td>DHL</td>
                        <td>Sur</td>
                        <td>Ejemplo-Mayorazgo</td>
                        <td>Jannet Medina</td>
                        <td>Juan Carlos Boodoque</td>
                        <td>Faltas</td>
                        <td>asistencias.pdf&nbsp;<i class="fas fa-file-download"></i>
                        </td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>16/05/2021</td>
                        <td>DHL</td>
                        <td>Sur</td>
                        <td>Ejemplo-Mayorazgo</td>
                        <td>Jannet Medina</td>
                        <td>Juan Carlos Boodoque</td>
                        <td>Faltas</td>
                        <td>asistencias.pdf&nbsp;<i class="fas fa-file-download"></i>
                        </td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>16/05/2021</td>
                        <td>DHL</td>
                        <td>Sur</td>
                        <td>Ejemplo-Mayorazgo</td>
                        <td>Jannet Medina</td>
                        <td>Juan Carlos Boodoque</td>
                        <td>Faltas</td>
                        <td>asistencias.pdf&nbsp;<i class="fas fa-file-download"></i>
                        </td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>16/05/2021</td>
                        <td>DHL</td>
                        <td>Sur</td>
                        <td>Ejemplo-Mayorazgo</td>
                        <td>Jannet Medina</td>
                        <td>Juan Carlos Boodoque</td>
                        <td>Faltas</td>
                        <td>asistencias.pdf&nbsp;<i class="fas fa-file-download"></i>
                        </td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>16/05/2021</td>
                        <td>DHL</td>
                        <td>Sur</td>
                        <td>Ejemplo-Mayorazgo</td>
                        <td>Jannet Medina</td>
                        <td>Juan Carlos Boodoque</td>
                        <td>Faltas</td>
                        <td>asistencias.pdf&nbsp;<i class="fas fa-file-download"></i>
                        </td>
                        <td>En proceso</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#proveedor').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.1/i18n/es_es.json'
                }
            });
        });
    </script>

@endsection
