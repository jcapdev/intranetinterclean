<?php

namespace App\Http\Controllers\UsuarioController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class RHController extends Controller
{
    function index(){
        return view('dashboards.rh.index');
    }
    
    function profile(){
        return view('dashboards.rh.profile');
    }
    
    function settings(){
        return view('dashboards.rh.settings');
    }
}
