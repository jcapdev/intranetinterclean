<?php

namespace App\Http\Controllers\UsuarioController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\inventario;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    function index(){
        return view('dashboards.admin.index');
    }
    
    function profile(){
        return view('dashboards.admin.profile');
    }
    function settings(){
        return view('dashboards.admin.settings');
    }
    // RUTAS DE USUARIO ADMIN(VISTAS)
    public function Usuario(){

        $usuario = Usuario::All();
        return view('dashboards.admin.usuariol',compact('usuario'));

    }
    function control(){
        return view('dashboards.admin.control');
    }
    function incidencias(){
        return view('dashboards.admin.incidencias');
    }
        
    // public function proveedores(){
    //     $proveedor = Proveedor::All();
    //     return view('dashboards.admin.proveedores',compact('proveedor'));
    // }
    public function inventario(){
        $inventario = inventario::All();
        return view('dashboards.admin.inventario', compact('inventario'));
    }
    
}
