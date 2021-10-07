<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            // if (Auth::guard($guard)->check()) {
            //     return redirect(RouteServiceProvider::HOME);
            // }
            if( Auth::guard($guard)->check() && Auth::user()->tipo_usuario == "AD"){
                return redirect()->route('admin.dashboard');
            }
            elseif( Auth::guard($guard)->check() && Auth::user()->tipo_usuario == "SP"){
                return redirect()->route('supervisor.dashboard');
            }
            elseif( Auth::guard($guard)->check() && Auth::user()->tipo_usuario == "RH"){
                return redirect()->route('rh.dashboard');
            }
            elseif( Auth::guard($guard)->check() && Auth::user()->tipo_usuario == "RC"){
                return redirect()->route('reclutador.dashboard');
            }
            elseif( Auth::guard($guard)->check() && Auth::user()->tipo_usuario == "MC"){
                return redirect()->route('mesacontrol.dashboard');
            }
            elseif( Auth::guard($guard)->check() && Auth::user()->tipo_usuario == "MK"){
                return redirect()->route('marketing.dashboard');
            }
            elseif( Auth::guard($guard)->check() && Auth::user()->tipo_usuario == "CA"){
                return redirect()->route('contador.dashboard');
            }
            elseif( Auth::guard($guard)->check() && Auth::user()->tipo_usuario == "CO"){
                return redirect()->route('coordinador.dashboard');
            }
        }

        return $next($request);
    }
}
