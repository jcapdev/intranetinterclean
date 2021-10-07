@include('commoni.modalHead')
<div class="row">
    
    <div class="col-sm-12">
        <div class="input-group">
            <div class="input-group-preprend">
               <span class="input-group-text">
                   <span class="fas fa-edit">
                       <label>Fecha de Incidencia</label>
                   </span>
               </span>
            </div>
            <input type="text" wire:model.lazy="fechaIncidencia" class="form-control" placeholder="ej: dd/mm/aa">
        </div>
        @error('fechaIncidencia') <span class="text-danger er">{{ $message }}</span> @enderror
    </div>

    
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-archway"></i>
                        <label>Sucursal</label>
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="idSucursal" class="form-control" placeholder="ej: DHL, Salinas..">
        </div>
        @error('idSucursal') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    
    
    
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span></i>
                        <label>Motivo</label>
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="nombreProsInc" class="form-control" placeholder="ej: Motivo de Baja, Resfriado...">
        </div>
        @error('nombreProsInc') <span class="text-danger er">{{$message}}</span> @enderror
    </div>

    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span></i>
                        <label>Descripcion</label>
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="descripcion" class="form-control" placeholder="ej: Por el motivo de la incidente.....">
        </div>
        @error('descripcion') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    
    
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span></i>
                        <label>Estatus de la Incidencia</label>
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="estatusIncidencia" class="form-control" placeholder="ej: 1 activo, 2 Inactivo">
        </div>
        @error('estatusIncidencia') <span class="text-danger er">{{$message}}</span> @enderror
    </div>


    {{-- ------------------------------------------------------------------------------------------------------------------ --}}
    
    <div class="col-sm-12 mt-3">
        <div class="form-group custom-file">
            
            <input type="file" class="custom-file-input form-control" wire:model="urlDocumentoInc" accept="image/x-png, image/jpeg, image/jpg">
            <label  class="custom-file-label">{{ $urlDocumentoInc }}</label>
            @error('urlDocumentoInc') <span class="text-danger er">{{ $message }}</span> @enderror
                
        </div>
    </div>

    {{-- <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span>
                        <label  class="custom-file-label">{{ $urlDocumentoInc }}</label>
                    </span>
                </span>
            </div>
            <input type="file" class="custom-file-input form-control" wire:model="image" accept="image/x-png, image/jpeg, image/jpg">
        </div>
        @error('urlDocumentoInc') <span class="text-danger er">{{$message}}</span> @enderror
    </div> --}}


    {{-- ------------------------------------------------------------------------------------------------------------------ --}}

    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span>
                        <label>Documento</label>
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="NomDocInc" class="form-control" placeholder="ej: Incidencia.pdf">
        </div>
        @error('NomDocInc') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    




    
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span>
                        <label>Usuario Reg.</label>
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="idUsarioRegInc" class="form-control" placeholder="ej: 1 ó 2">
        </div>
        @error('idUsarioRegInc') <span class="text-danger er">{{$message}}</span> @enderror
    </div>
    
    
    <div class="col-sm-12 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span>
                        <label>Prioridad</label>
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="prioridad" class="form-control" placeholder="ej: Alta , baja">
        </div>
        @error('prioridad') <span class="text-danger er">{{$message}}</span> @enderror
    </div>

    @include('commoni.modalFooter')
</div>
