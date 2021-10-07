<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proveedor;
use Livewire\WithPagination;

class Proveedores extends Component
{

    use WithPagination;
    public $pais_proveedor, $Estado_proveedor, $nombre_proveedor, $rfc_proveedor, $tipo_proveedor, 
    $direccion_proveedor, $cp_proveedor, $telefono_proveedor, $forma_pago_proveedor, $descripcion, 
    $servicio, $productos, $tiposrevioprop, $eliminar, $municipio, $correo, $search, $selected_id, 
    $pageTitle, $componentName;

    private $pagination = 5;

    public function mount() {
        /* Metodo principal que se ejecuta cuando se monta este componente
        Se utiliza para inicializar propiedades o para inicializar informacion que se va a renderizar en la vista principal del componente */
        $this->pageTitle = 'Listado';
        $this->componentName = 'Proveedores';
    }

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        if(strlen($this->search) > 0) {
            //strlen no ayudara a verificar si search tiene info o no 
            $data = Proveedor::where('nombre_proveedor', 'LIKE', '%' . $this->search . '%')
            ->paginate($this->pagination);
        }
        else {
            $data = Proveedor::orderBy('id_proveedor', 'asc')->paginate($this->pagination);
        }

        // $data = Proveedor::all();
        return view('livewire.proveedor.proveedores', ['proveedor' => $data])
        // return view('livewire.usuario.usuarios')
        ->extends('layouts.theme.tablero')
        ->section('content');
    }

    public function Edit($id_proveedor)
    {
        $record = Proveedor::find($id_proveedor, ['id_proveedor', 'pais_proveedor', 'Estado_proveedor', 
        'nombre_proveedor', 'rfc_proveedor', 'tipo_proveedor', 'direccion_proveedor', 'cp_proveedor', 
        'telefono_proveedor', 'forma_pago_proveedor', 'descripcion', 'servicio', 'productos', 
        'tiposrevioprop', 'eliminar', 'municipio', 'correo']);
        $this->pais_proveedor = $record->pais_proveedor;
        $this->selected_id = $record->id_proveedor;
        $this->Estado_proveedor = $record->Estado_proveedor;
        $this->nombre_proveedor = $record->nombre_proveedor;
        $this->rfc_proveedor = $record->rfc_proveedor;
        $this->tipo_proveedor = $record->tipo_proveedor;
        $this->direccion_proveedor = $record->direccion_proveedor;
        $this->cp_proveedor = $record->cp_proveedor;
        $this->telefono_proveedor = $record->telefono_proveedor;
        $this->forma_pago_proveedor = $record->forma_pago_proveedor;
        $this->descripcion = $record->descripcion;
        $this->servicio = $record->servicio;
        $this->productos = $record->productos;
        $this->tiposrevioprop = $record->tiposrevioprop;
        $this->eliminar = $record->eliminar;
        $this->municipio = $record->municipio;
        $this->correo = $record->correo;

        $this->emit('show-modal', 'show modal!');
    }

    public function Store()
    {
        $rules = [
            'pais_proveedor' => ['required', 'string', 'min:4', 'max:255'],
            'Estado_proveedor' => ['required', 'string', 'min:4', 'max:255'],
            'nombre_proveedor' => ['required', 'string', 'min:4', 'max:255'],
            'rfc_proveedor' => ['required', 'string', 'min:6', 'max:255'],
            'tipo_proveedor' => ['required', 'string', 'min:4', 'max:255'],
            'direccion_proveedor' => ['required', 'string', 'min:4', 'max:255'],
            'cp_proveedor' => ['required', 'string', 'min:4'],
            'telefono_proveedor' => ['required', 'string', 'min:6', 'max:12'],
            'forma_pago_proveedor' => ['required', 'string', 'min:4', 'max:255'],
            'descripcion' => ['required', 'string', 'min:4', 'max:255'],
            'servicio' => ['required', 'string', 'min:2', 'max:255'],
            'productos' => ['required', 'string', 'max:2'], 
            'tiposrevioprop' => ['required', 'string', 'max:2'],
            'eliminar' => ['required', 'string', 'max:2'],
            'municipio' => ['required', 'string', 'min:4', 'max:255'], 
            'correo' => ['required', 'string', 'min:4', 'max:255']
        ];

        $messages = [
            'pais_proveedor.required' => 'Pais del proveedor es requerido',
            'Estado_proveedor.required' => 'Estado del proveedor es requerido',
            'nombre_proveedor.required' => 'Nombre del proveedor es requerido',
            'rfc_proveedor.required' => 'RFC del proveedor es requerido',
            'tipo_proveedor.required' => 'Tipo del proveedor es requerido',
            'direccion_proveedor.required' => 'Direccion del proveedor es requerido',
            'cp_proveedor.required' => 'Codigo Postal del proveedor es requerido',
            'telefono_proveedor.required' => 'Telefono del proveedor es requerido',
            'forma_pago_proveedor.required' => 'Forma de pago del proveedor es requerido',
            'descripcion.required' => 'La descripcion es requerido',
            'servicio.required' => 'Servicio del proveedor es requerido',
            'productos.required' => 'Productos del proveedor es requerido',
            'tiposrevioprop.required' => 'Tipo de envio del proveedor es requerido',
            'eliminar.required' => 'Eliminar es requerido',
            'municipio.required' => 'Municipio del proveedor es requerido',
            'correo.required' => 'Correo del proveedor es requerido',
            'productos.max' => 'Dato requerido: 0 ó 1',
            'tiposrevioprop.max' => 'Dato requerido: 0 ó 1',
            'eliminar.max' => 'Dato requerido: 0 ó 1'
        ];

        $this->validate($rules, $messages);

        $proveedorStore = Proveedor::create([
            'pais_proveedor' => $this->pais_proveedor,
            'Estado_proveedor' => $this->Estado_proveedor,
            'nombre_proveedor' => $this->nombre_proveedor,
            'rfc_proveedor' => $this->rfc_proveedor,
            'tipo_proveedor' => $this->tipo_proveedor,
            'direccion_proveedor' => $this->direccion_proveedor,
            'cp_proveedor' => $this->cp_proveedor,
            'telefono_proveedor' => $this->telefono_proveedor,
            'forma_pago_proveedor' => $this->forma_pago_proveedor,
            'descripcion' => $this->descripcion,
            'servicio' => $this->servicio,
            'productos' => $this->productos,
            'tiposrevioprop' => $this->tiposrevioprop,
            'eliminar' => $this->eliminar,
            'municipio' => $this->municipio,
            'correo' => $this->correo
          ]);

          $this->resetUI();
          $this->emit('proveedor-added', 'Proveedor Agregado!');

    }

    public function Update()
    {
        $rules = [
            'pais_proveedor' => ['required', 'string', 'min:4', 'max:255'],
            'Estado_proveedor' => ['required', 'string', 'min:4', 'max:255'],
            'nombre_proveedor' => ['required', 'string', 'min:4', 'max:255'],
            'rfc_proveedor' => ['required', 'string', 'min:6', 'max:255'],
            'tipo_proveedor' => ['required', 'string', 'min:4', 'max:255'],
            'direccion_proveedor' => ['required', 'string', 'min:4', 'max:255'],
            'cp_proveedor' => ['required', 'string', 'min:4'],
            'telefono_proveedor' => ['required', 'string', 'min:6', 'max:12'],
            'forma_pago_proveedor' => ['required', 'string', 'min:4', 'max:255'],
            'descripcion' => ['required', 'string', 'min:4', 'max:255'],
            'servicio' => ['required', 'string', 'min:2', 'max:255'],
            'productos' => ['required', 'string', 'max:2'], 
            'tiposrevioprop' => ['required', 'string', 'max:2'],
            'eliminar' => ['required', 'string', 'max:2'],
            'municipio' => ['required', 'string', 'min:4', 'max:255'], 
            'correo' => ['required', 'string', 'min:4', 'max:255']
        ];

        $messages = [
            'pais_proveedor.required' => 'Pais del proveedor es requerido',
            'Estado_proveedor.required' => 'Estado del proveedor es requerido',
            'nombre_proveedor.required' => 'Nombre del proveedor es requerido',
            'rfc_proveedor.required' => 'RFC del proveedor es requerido',
            'tipo_proveedor.required' => 'Tipo del proveedor es requerido',
            'direccion_proveedor.required' => 'Direccion del proveedor es requerido',
            'cp_proveedor.required' => 'Codigo Postal del proveedor es requerido',
            'telefono_proveedor.required' => 'Telefono del proveedor es requerido',
            'forma_pago_proveedor.required' => 'Forma de pago del proveedor es requerido',
            'descripcion.required' => 'La descripcion es requerido',
            'servicio.required' => 'Servicio del proveedor es requerido',
            'productos.required' => 'Productos del proveedor es requerido',
            'tiposrevioprop.required' => 'Tipo de envio del proveedor es requerido',
            'eliminar.required' => 'Eliminar es requerido',
            'municipio.required' => 'Municipio del proveedor es requerido',
            'correo.required' => 'Correo del proveedor es requerido',
            'productos.max' => 'Dato requerido: 0 ó 1',
            'tiposrevioprop.max' => 'Dato requerido: 0 ó 1',
            'eliminar.max' => 'Dato requerido: 0 ó 1'
        ];   

        $this->validate($rules, $messages);

        $proveedorUpdate = Proveedor::find($this->selected_id);
        $proveedorUpdate->Update([
            'pais_proveedor' => $this->pais_proveedor,
            'Estado_proveedor' => $this->Estado_proveedor,
            'nombre_proveedor' => $this->nombre_proveedor,
            'rfc_proveedor' => $this->rfc_proveedor,
            'tipo_proveedor' => $this->tipo_proveedor,
            'direccion_proveedor' => $this->direccion_proveedor,
            'cp_proveedor' => $this->cp_proveedor,
            'telefono_proveedor' => $this->telefono_proveedor,
            'forma_pago_proveedor' => $this->forma_pago_proveedor,
            'descripcion' => $this->descripcion,
            'servicio' => $this->servicio,
            'productos' => $this->productos,
            'tiposrevioprop' => $this->tiposrevioprop,
            'eliminar' => $this->eliminar,
            'municipio' => $this->municipio,
            'correo' => $this->correo
        ]);

        $this->resetUI();
        $this->emit('proveedor-updated', 'Proveedor Actualizado!');
    }

    protected $listeners = [
        'deleteRow' => 'Destroy'
    ];

    public function Destroy(Proveedor $proveedorDestroy)
    {
        // $proveedorDestroy = Proveedor::find($id);
        // dd($proveedorDestroy);
        $proveedorDestroy->delete();

        $this->resetUI();
        $this->emit('proveedor-deleted', 'Proveedor Eliminado!');
    }

    public function resetUI()
    {
        $this->pais_proveedor = '';
        $this->Estado_proveedor = '';
        $this->nombre_proveedor = '';
        $this->rfc_proveedor = '';
        $this->tipo_proveedor = '';
        $this->direccion_proveedor = '';
        $this->cp_proveedor = '';
        $this->telefono_proveedor = '';
        $this->forma_pago_proveedor = '';
        $this->descripcion = '';
        $this->servicio = '';
        $this->productos = '';
        $this->tiposrevioprop = '';
        $this->eliminar = '';
        $this->municipio = '';
        $this->correo = '';
        $this->search = '';
        $this->selected_id = 0;
    }
}

