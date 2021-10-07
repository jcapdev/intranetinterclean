<?php

namespace App\Http\Controllers\UsuarioController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class MarketingController extends Controller
{
    function index(){
        return view('dashboards.marketing.index');
    }
    
    function profile(){
        return view('dashboards.marketing.profile');
    }
    
    function settings(){
        return view('dashboards.marketing.settings');
    }
}
