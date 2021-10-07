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
                                data-target="#ModalProveedor"><i class="far fa-plus-square"></i></a>
                        </div>
                    </div>
                </ul>
            </div>

            @include('common.searchbox')

            <div class="widget-content">
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped mt-1">

                        <thead class="text-white" style="background: #343a40;">
                            <tr>
                                <th class="table-th text-white">Pais</th>
                                <th class="table-th text-white">Estado</th>
                                <th class="table-th text-white">Nombre</th>
                                <th class="table-th text-white">RFC</th>
                                <th class="table-th text-white">Tipo</th>
                                <th class="table-th text-white">Direccion</th>
                                <th class="table-th text-white">Codigo Postal</th>
                                <th class="table-th text-white">Telefono</th>
                                <th class="table-th text-white">Forma pago</th>
                                <th class="table-th text-white">Descripcion</th>
                                <th class="table-th text-white">Servicio</th>
                                <th class="table-th text-white">Productos</th>
                                <th class="table-th text-white">Tipo de envio</th>
                                <th class="table-th text-white">Eliminar</th>
                                <th class="table-th text-white">Municipio</th>
                                <th class="table-th text-white">Correo Electronico</th>
                                <th class="table-th text-white">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proveedor as $proveedores)
                                <tr>
                                    <td style="font-size: 14px">{{ $proveedores->pais_proveedor }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->Estado_proveedor }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->nombre_proveedor }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->rfc_proveedor }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->tipo_proveedor }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->direccion_proveedor }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->cp_proveedor }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->telefono_proveedor }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->forma_pago_proveedor }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->descripcion }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->servicio }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->productos }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->tiposrevioprop }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->eliminar }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->municipio }}</td>
                                    <td style="font-size: 14px">{{ $proveedores->correo }}</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" 
                                        wire:click="Edit({{ $proveedores->id_proveedor }})"
                                            class="btn btn-dark" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0)" 
                                        onclick="Confirm('{{ $proveedores->id_proveedor }}')"
                                            class="btn btn-dark" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                {{ $proveedor->links() }}
            </div>
        </div>
    </div>
    @include('livewire.proveedor.form')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Para escuchar los eventos dentro del Front-End
        window.livewire.on('show-modal', msg => {
            $('#ModalProveedor').modal('show')
        });

        window.livewire.on('proveedor-added', msg => {
            $('#ModalProveedor').modal('hide')
        });

        window.livewire.on('proveedor-updated', msg => {
            $('#ModalProveedor').modal('hide')
        });
    });

    function Confirm(id_proveedor) {
        swal({
            title: 'CONFIRMAR',
            text: '¿Deseas eliiminar el proveedor?',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#FFFFFF',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#7FA439'
        }).then(function(result) {
            if (result.value) {
                window.livewire.emit('deleteRow', id_proveedor)
                swal.close()
            }
        })
    }
</script>
