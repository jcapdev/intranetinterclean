<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    // Redirige a las rutas establecidas
    protected function redirectTo(){
        // Redirect Route con tipo de Usuario Administrador
        if( Auth()->user()->tipo_usuario == "AD"){
            return route('admin.dashboard');
        }
        // Redirect Route con tipo de Usuario Supervisor
        elseif( Auth()->user()->tipo_usuario == "SP"){
            return route('supervisor.dashboard');
        }
        // Redirect Route con tipo de Usuario Recursos Humanos
        elseif( Auth()->user()->tipo_usuario == "RH"){
            return route('rh.dashboard');
        }
        // Redirect Route con tipo de Usuario Reclutador
        elseif( Auth()->user()->tipo_usuario == "RC"){
            return route('reclutador.dashboard');
        }
        // Redirect Route con tipo de Usuario Mesa de Control
        elseif( Auth()->user()->tipo_usuario == "MC"){
            return route('mesacontrol.dashboard');
        }
        // Redirect Route con tipo de Usuario Marketing
        elseif( Auth()->user()->tipo_usuario == "MK"){
            return route('marketing.dashboard');
        }
        // Redirect Route con tipo de Usuario Contador
        elseif( Auth()->user()->tipo_usuario == "CA"){
            return route('contador.dashboard');
        }
        // Redirect Route con tipo de Usuario Coordinador
        elseif( Auth()->user()->tipo_usuario == "CO"){
            return route('coordinador.dashboard');
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Realiza funcion Login
    public function login(Request $request){
        $input = $request->all();
        $this->validate($request,[
            'nombreUsuario'=>'required',
            'password'=>'required'
        ]);
        if( auth()->attempt(array('nombreUsuario'=>$input['nombreUsuario'], 'password'=>$input['password'])) ){
            // Verifica Auth Login Administrador
            if( auth()->user()->tipo_usuario == "AD" ){
                return redirect()->route('admin.dashboard');
            }
            // Verifica Auth Login Supervisor
            elseif( auth()->user()->tipo_usuario == "SP" ){
                return redirect()->route('supervisor.dashboard');
            }
            // Verifica Auth Login Recursos Humanos
            elseif( auth()->user()->tipo_usuario == "RH" ){
                return redirect()->route('rh.dashboard');
            }
            // Verifica Auth Login Reclutador
            elseif( auth()->user()->tipo_usuario == "RC" ){
                return redirect()->route('reclutador.dashboard');
            }
            // Verifica Auth Login Mesa de Control
            elseif( auth()->user()->tipo_usuario == "MC" ){
                return redirect()->route('mesacontrol.dashboard');
            }
            // Verifica Auth Login Marketing
            elseif( auth()->user()->tipo_usuario == "MK" ){
                return redirect()->route('marketing.dashboard');
            }
            // Verifica Auth Login Contador
            elseif( auth()->user()->tipo_usuario == "CA" ){
                return redirect()->route('contador.dashboard');
            }
            // Verifica Auth Login Coordinador
            elseif( auth()->user()->tipo_usuario == "CO" ){
                return redirect()->route('coordinador.dashboard');
            }
        }else{
            return redirect()->route('login')->with('error','nombreUsuario and password are wrong');
        }
    }
}
