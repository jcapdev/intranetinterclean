{{-- @extends('layouts.theme.tablero')
@section('content')
<div class="wrapper">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Incidencias</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>Fecha Incidencia</th>
                        <th>Cliente</th>
                        <th>Zona</th>
                        <th>Sucursal</th>
                        <th>Supervisor</th>
                        <th>Empleado</th>
                        <th>Incidencia</th>
                        <th>Documento</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($incidencias as $incidencias)
                    <tr>
                        <td>{{ $incidencias->idIncidencias }}</td>
                        <td>{{ $incidencias->fechaIncidencia }}</td>
                        <td>{{ $incidencias->idSucursal }}</td>
                        <td>{{ $incidencias->nombreProsInc }}</td>
                        <td>{{ $incidencias->descripcion }}</td>
                        <td>{{ $incidencias->estatusIncidencia }}</td>
                        <td>{{ $incidencias->urlDocumentoInc }}</td>
                        <td>{{ $incidencias->NomDocInc }}</td>
                        <td>{{ $incidencias->idUsarioRegInc }}</td>
                      <td>
                        <button type="button" class="btn btn-primary btn-block"><i class="far fa-edit"></i></button> 
                        <button type="button" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i></button> 
                      </td>
                    </tr>
                @endforeach                    
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Fecha Incidencia</th>
                        <th>Cliente</th>
                        <th>Zona</th>
                        <th>Sucursal</th>
                        <th>Supervisor</th>
                        <th>Empleado</th>
                        <th>Incidencia</th>
                        <th>Documento</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
</div>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endsection --}}
