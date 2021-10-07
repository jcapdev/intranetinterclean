@include('common.modalHead')
<div class="row">
    
    <div class="col-sm-12">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="pais_proveedor" class="form-control" placeholder="ej: México">
        </div>
        @error('pais_proveedor') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Pais Proveedor --}}
    {{-- Estado Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="Estado_proveedor" 
            class="form-control" 
            placeholder="ej: Durango, Tamaulipas">
        </div>
        @error('Estado_proveedor') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Estado Proveedor --}}
    {{-- Nombre Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="nombre_proveedor" class="form-control" placeholder="ej: Mr Limpio">
        </div>
        @error('nombre_proveedor') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Nombre Proveedor --}}
    {{-- RFC Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="rfc_proveedor" class="form-control" placeholder="ej: DZE1004271Q8">
        </div>
        @error('rfc_proveedor') <span class="text-danger er">{{$message}}</span> @enderror
    </div>

    {{-- RFC Proveedor --}}
    {{-- Tipo Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="tipo_proveedor" class="form-control" placeholder="ej: PERSONA MORAL">
        </div>
        @error('tipo_proveedor') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Tipo Proveedor --}}
    {{-- Direccion Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="direccion_proveedor" class="form-control" placeholder="ej: ANDADOR GORRIONES">
        </div>
        @error('direccion_proveedor') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Direccion Proveedor --}}
    {{-- CP Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="cp_proveedor" class="form-control" placeholder="ej: 86553">
        </div>
        @error('cp_proveedor') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- CP Proveedor --}}
    {{-- Telefono Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="telefono_proveedor" class="form-control" placeholder="ej: 9371033701">
        </div>
        @error('telefono_proveedor') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Telefono Proveedor --}}
    {{-- Forma Pago Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="forma_pago_proveedor" class="form-control" placeholder="ej: TRANSFERENCIA Y FACTURA">
        </div>
        @error('forma_pago_proveedor') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Forma Pago Proveedor --}}
    {{-- Descripcion Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="descripcion" class="form-control" placeholder="ej: PRODUCTOS DE LIMPIEZA">
        </div>
        @error('descripcion') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Descripcion Proveedor --}}
    {{-- Servicio Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="servicio" class="form-control" placeholder="ej: 1, 2, 3">
        </div>
        @error('servicio') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Servicio Proveedor --}}
    {{-- Productos Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="productos" class="form-control" placeholder="ej: 1: INSUMOS DE LIMPIEZA Y JARCIERIA, 2: EQUIPO DE PROTECCION PERSONAL">
        </div>
        @error('productos') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Productos Proveedor --}}
    {{-- Tipos envio Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="tiposrevioprop" class="form-control" placeholder="ej: 1, 2">
        </div>
        @error('tiposrevioprop') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Tipos envio Proveedor --}}
    {{-- Eliminar Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="eliminar" class="form-control" placeholder="ej: 0, 1">
        </div>
        @error('eliminar') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Eliminar Proveedor --}}
    {{-- Municipio Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="municipio" class="form-control" placeholder="ej: COATZACOALCOS">
        </div>
        @error('municipio') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Municipio Proveedor --}}
    {{-- Correo Proveedor --}}
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="correo" class="form-control" placeholder="ej: guimelmexico@gmail.com">
        </div>
        @error('correo') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    {{-- Correo Proveedor --}}
</div>

@include('common.modalFooter')
