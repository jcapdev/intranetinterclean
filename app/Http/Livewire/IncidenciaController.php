<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Incidencia;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class IncidenciaController extends Component
{
    use WithFileUploads;
    use WithPagination;

    // variables de cada dato de la base de datos
    public $fechaIncidencia, $idSucursal, $nombreProsInc, $descripcion, $estatusIncidencia, $urlDocumentoInc, $NomDocInc, $idUsarioRegInc, $prioridad;
    // variables de cada dato de la base de datos
               
    public $image, $selected_id, $pageTittle, $componentName, $search;

    private $pagination = 5;

    public function mount(){
        $this->pageTitle     = 'Incidencias';
        $this->componentName = 'Tabla';
    }
    public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }
    public function render(){
        // $data = Incidencia::all(); BUSCADOR
        if(strlen($this->search) > 0){

            $data = Incidencia::where('idSucursal', 'LIKE', '%' . $this->search . '%')->paginate($this->pagination);
        }
        else{

            $data = Incidencia::orderBy('idSucursal','desc')->paginate($this->pagination);
        }

        return view('livewire.incidencias.incidencia' , ['incidencia' => $data])
        ->extends('layouts.theme.tablero')
        ->section('content'); 
    }




    public function Edit($id){

        $record =Incidencia::find($id,['fechaIncidencia','idSucursal','nombreProsInc','descripcion','estatusIncidencia','urlDocumentoInc','NomDocInc','idUsarioRegInc','prioridad']); //Optimizando las consultas
        $this->fechaIncidencia = $record->fechaIncidencia;
        $this->idSucursal = $record->idSucursal;
        $this->nombreProsInc = $record->nombreProsInc;
        $this->descripcion = $record->descripcion;
        $this->estatusIncidencia = $record->estatusIncidencia;
        $this->selected_id = $record->id;
        $this->urlDocumentoInc = null; //IMAGEN // $this->image = null;
        $this->NomDocInc = $record->NomDocInc;
        $this->idUsarioRegInc = $record->idUsarioRegInc;
        $this->prioridad = $record->prioridad;
       
        
        
        $this->emit('show-modal','Mostrando el modal!');
        // Estos campos mandan a llamar la informacion y la traen de vuelta
        // en la vista para poder hacer su actualizacion
    }

    public function Store(){
        $rules =[
           'fechaIncidencia' => 'required|string|min:5|max:50',
           'idSucursal' => 'required|string|min:1|max:50',
           'nombreProsInc' => 'required|string|min:2|max:200',
           'descripcion' => 'required|string|min:5|max:50',
           'estatusIncidencia' => 'required|string|min:1|max:50',
        //  'urlDocumentoInc'=> 'required|string|min:2|max:100',
           'NomDocInc' =>  'required|string|min:1|max:50',
           'idUsarioRegInc' =>  'required|string|min:1|max:10',
           'prioridad' => 'required|string|min:3|max:50'
        ];

        $messages = [
            'fechaIncidencia.required'  => 'Nombre de la checha es requerido',
            'fechaIncidencia.min'       => 'la fecha debe ser correspondiente al siguiente formato dd/mm/aa',
         ];

         $this->validate($rules,$messages);

         $incidencia = Incidencia::create([
            'fechaIncidencia' => $this->fechaIncidencia,
            'idSucursal' => $this->idSucursal,
            'nombreProsInc' => $this->nombreProsInc,
            'descripcion' => $this->descripcion,
            'estatusIncidencia' => $this->estatusIncidencia,
            'urlDocumentoInc' => $this->urlDocumentoInc,
            'NomDocInc' => $this->NomDocInc,
            'idUsarioRegInc' => $this->idUsarioRegInc,
            'prioridad'  => $this->prioridad
         ]);


         if($this->image){
            $urlDocumentoInc =uniqid() . '_.' . $this->image->extension();
            $this->image->storeas('public/incidencia', $urlDocumentoInc);
            $incidencia->image = $urlDocumentoInc;
            $incidencia->save();
        }

        $this->resetUI();
        $this->emit('incidencia-added', 'Incidencia Registrada');
        
    }


    public function Update($id){
        $rules =[
            'fechaIncidencia' => 'required|string|min:5|max:50',
            'idSucursal' => 'required|string|min:1|max:50',
            'nombreProsInc' => 'required|string|min:2|max:200',
            'descripcion' => 'required|string|min:5|max:50',
            'estatusIncidencia' => 'required|string|min:1|max:50',
            'NomDocInc' =>  'required|string|min:1|max:50',
            'idUsarioRegInc' =>  'required|string|min:1|max:10',
            'prioridad' => 'required|string|min:3|max:50'
         ];

         $messages = [
            'fechaIncidencia.required'  => 'Nombre de la checha es requerido',
            'fechaIncidencia.min'       => 'la fecha debe ser correspondiente al siguiente formato dd/mm/aa',
         ];
         $this->validate($rules, $messages);

         $incidencia = Incidencia::find($this->selected_id);
         $incidencia->Update([
            'fechaIncidencia' => $this->fechaIncidencia,
            'idSucursal' => $this->idSucursal,
            'nombreProsInc' => $this->nombreProsInc,
            'descripcion' => $this->descripcion,
            'estatusIncidencia' => $this->estatusIncidencia,
            'urlDocumentoInc' => $this->urlDocumentoInc,
            'NomDocInc' => $this->NomDocInc,
            'idUsarioRegInc' => $this->idUsarioRegInc,
            'prioridad'  => $this->prioridad
         ]);

         if($this->image){
            $urlDocumentoInc =uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/incidencia', $urlDocumentoInc);
            $imageName= $$incidencia->image;
            $incidencia->image = $urlDocumentoInc;
            $incidencia->save();

            if($imageName != null){
                if(file_exists('storage/categories' . $imageName))
                {
                    unlink('storage/categories' . $imageName);
                }
            }
        }
        $this->resetUI();
        $this->emit('incidencia-updated','Incidencia Actualizada');
    }

    protected $listeners = [
        'deleteRow' => 'Destroy'
    ];


    public function Destroy($id){
        $incidenciadestroy = Incidencia::find($id);
        // dd($incidenciadestroy); 
        $imageName = $incidenciadestroy->image; // imagen temporal
        $incidenciadestroy->delete();

        if($imageName != null){
            unlink('storeage/incidencias/' . $imageName);
        }
        $this->resetUI();
        $this->emit('incidencia-deleted',' Incidencia Eliminada');
    }








    public function resetUI(){
       $this->fechaIncidencia ='';
       $this->idSucursal = '';
       $this->nombreProsInc ='';
       $this->descripcion ='';
       $this->estatusIncidencia ='';
       $this->urlDocumentoInc = NULL;
       $this->NomDocInc ='';
       $this->idUsarioRegInc ='';
       $this->prioridad ='';
       $this->selected_id  = 0;
    }

} 