<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">

               <div class="widget-heading mt-4">
                <h4 class="card-title">
                    <b>{{ $componentName }} | {{ $pageTitle }}</b>
                </h4>
                <ul class="tabs tab-pills">
                    <div class="container-fluid">
                        <div class="text-right">
                            <a href="javascript:void(0)" class="btn btn-dark" data-toggle="modal"
                                data-target="#theModal"><i class="far fa-plus-square"></i></a>
                        </div>
                    </div>
                </ul>

            </div>

                @include('commoni.searchbox')


                <div class="widget-content">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-striped mt-1">
                                <thead class="text-white" style="background: #3B3F5C;">
                                    <tr>
                                        <th class="table-th text-white">id</th>
                                        <th class="table-th text-white">Fecha Incidencia</th>
                                        <th class="table-th text-white">Sucursal</th>
                                        <th class="table-th text-white">Nombre Pros Inc</th>
                                        <th class="table-th text-white">Descripcion</th>
                                        <th class="table-th text-white">Estatus</th>
                                        <th class="table-th text-white">Imagen</th>
                                        <th class="table-th text-white">Documento</th>
                                        <th class="table-th text-white">Id Usuario Regional</th>
                                        <th class="table-th text-white">Prioridad</th>
                                        <th class="table-th text-white">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($incidencia as $incidencias)
                                        <tr>
                                            <td>{{ $incidencias->id }}</td>
                                            <td>{{ $incidencias->fechaIncidencia }}</td>
                                            <td>{{ $incidencias->idSucursal }}</td>
                                            <td>{{ $incidencias->nombreProsInc }}</td>
                                            <td>{{ $incidencias->descripcion }}</td>
                                            <td>{{ $incidencias->estatusIncidencia }}</td>
                                            <td class="text-center">
                                                <span>
                                                    <img src="{{ asset('storage/incidencias/' .$incidencias->urlDocumentoInc ) }}" alt="*Imagen*" height="70" width="100" class="rounded">   
                                                </span> 
                                                <br>
                                                {{ $incidencias->urlDocumentoInc }}
                                            </td>
                                            {{-- aqui se debe descargar un documento PDF o word dependiendo el archivo de incidencia --}}
                                        <td>{{ $incidencias->NomDocInc }}</td>
                                        {{-- Url de documentos --}}
                                            {{-- <td class="text-center">
                                                <a href="javascript:void(0)"  title="Download"  class="btn bg-info text-white">
                                                    <i class="fas fa-file-download"></i>
                                                </a>  
                                            </td> --}}
                                            <td>{{ $incidencias->idUsarioRegInc }}</td>
                                            <td>{{ $incidencias->prioridad }}</td>

                                            <td class="text-center"> 
                                                <a href="javascript:void(0)" 
                                                wire:click="Edit({{  $incidencias->id }})" 
                                                title="Edit" 
                                                class="btn btn-primary btn-block">
                                                <i class="far fa-edit"></i>
                                            </a> 
                                                <a href="javascript:void(0)" 
                                                onclick="Confirm('{{ $incidencias->id }}')" 
                                                tittle="Delete" 
                                                class="btn btn-danger btn-block">
                                                <i class="fas fa-trash-alt"></i>
                                            </a> 
                                            </td>
                                        </tr>
                                    @endforeach   
                                </tbody>
                            </table>
                        </div>
                     {{ $incidencia->links() }}
                </div>
         </div>
    </div>
    @include('livewire.incidencias.form')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
         // Para escuchar los eventos dentro del Front-End
         window.livewire.on('show-modal', msg =>{
            $('#theModal').modal('show');
        });
        window.livewire.on('incidencia-added', msg =>{
            $('#theModal').modal('hide');
            noty(msg)
        });
        window.livewire.on('incidencia-updated', msg =>{
            $('#theModal').modal('hide');
            noty(msg)
        });
        window.livewire.on('incidencia-deleted', msg =>{
            noty(msg)
        });
        window.livewire.on('hide-modal', msg =>{
            $('#theModal').modal('hide');
        });
        window.livewire.on('hidden.bs.modal', msg =>{
            $('.er').css('display','none');
        });
        // -----------------------------------------------------------------
        window.livewire.on('show-modal', msg => {
            $('#theModal').modal('show')
        });
        // -----------------------------------------------------------------
    });


    function Confirm(id){
        swal({
            title: 'CONFIRMAR',
            text: '¿Deseas eliiminar la incidencia?',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#FFF',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#3B3F5C'
        }).then(function(result){
            if(result.value){
                window.livewire.emit('deleteRow', id)
                swal.close()
            }
        })
    }
</script>