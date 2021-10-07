<?php

namespace App\Http\Controllers\UsuarioController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class ContadorController extends Controller
{
    function index(){
        return view('dashboards.contador.index');
    }
    
    function profile(){
        return view('dashboards.contador.profile');
    }
    
    function settings(){
        return view('dashboards.contador.settings');
    }
}
