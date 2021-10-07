<?php

namespace App\Http\Controllers\UsuarioController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Incidencia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class SupervisorController extends Controller
{

    
    function index(){
        return view('dashboards.supervisor.index');
    }
    
    function profile(){
        $usuario = Usuario::All();
        return view('dashboards.supervisor.profile');
    }
  
    function settings(){
        return view('dashboards.supervisor.settings');
    }

    // RUTAS DE USUARIO SUPERVISOR(VISTAS)
    function entregables(){
        return view('dashboards.supervisor.entregables');
    }
    function prospectos(){
        $usuario = Usuario::All();
        return view('dashboards.supervisor.prospectos', compact('usuario'));
    }
    function plantillaregional(){
        return view('dashboards.supervisor.plantillaregional');
    }
    function cubredescanzo(){
        return view('dashboards.supervisor.cubredescanzo');
    }
    function asistencia(){
        return view('dashboards.supervisor.asistencia');
    }
    function reportes(){
        return view('dashboards.supervisor.reportes');
    }
    public function centrottrabajo(){
        $usuario = Usuario::All(); 
        return view('dashboards.supervisor.centrottrabajo',compact('usuario'));
    }
    function cotizacion(){
        return view('dashboards.supervisor.cotizacion');
    }
    function sanitizacion(){
        return view('dashboards.supervisor.sanitizacion');
    }
    function proveedores(){
        return view('dashboards.supervisor.proveedores');
    }
    public function incidencias(){
        $incidencias = Incidencia::All();
        return view('dashboards.supervisor.incidencias', compact('incidencias'));
    }
    function descargables(){
        return view('dashboards.supervisor.descargables');
    }
    function tickets(){
        return view('dashboards.supervisor.tickets');
    }
    function acta(){
        return view('dashboards.supervisor.acta');
    }
    function vacantes(){
        return view('dashboards.supervisor.vacantes');
    }
    function sidebar(){
        $usuario = Usuario::All();
        return view('layouts.theme.sidebar', compact('usuario'));
    }
}
