<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController\AdminController;
use App\Http\Controllers\UsuarioController\SupervisorController;
use App\Http\Controllers\UsuarioController\RHController;
use App\Http\Controllers\UsuarioController\ReclutadorController;
use App\Http\Controllers\UsuarioController\MesaControlController;
use App\Http\Controllers\UsuarioController\MarketingController;
use App\Http\Controllers\UsuarioController\ContadorController;
use App\Http\Controllers\UsuarioController\CoordinadorController;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Proveedores;
use App\Http\Livewire\IncidenciaController;
// use App\Http\Controllers\LoginController\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Primera vista
Route::get('/', function () {
    return view('auth.login');
});

// Auth::routes();

// ------------------------------------------------------- RUTAS PARA LOGIN USUARIOS ---------------------------------------------------
// ------------------------------------------------------------- No borrar -------------------------------------------------------------

// Ruta para prevenir acceso ilegal, borra cache para denegar accesos
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de acceso Administrador
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('proveedores',Proveedores::class)->name('admin.proveedores');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
    Route::get('control',[AdminController::class,'control'])->name('admin.control');
    Route::get('incidencias',[AdminController::class,'incidencias'])->name('admin.incidencias');
    Route::get('inventario',[AdminController::class,'inventario'])->name('admin.inventario');
    Route::get('usuariol',[AdminController::class,'Usuario'])->name('admin.usuariol');
});

// Rutas de acceso Supervisor
Route::group(['prefix'=>'supervisor', 'middleware'=>['isSupervisor','auth', 'PreventBackHistory']], function(){
    
    Route::get('dashboard',[SupervisorController::class,'index'])->name('supervisor.dashboard');
    Route::get('profile',[SupervisorController::class,'profile'])->name('supervisor.profile');
    Route::get('settings',[SupervisorController::class,'settings'])->name('supervisor.settings');
    Route::get('entregables',[SupervisorController::class,'entregables'])->name('supervisor.entregables');
    Route::get('prospectos',[SupervisorController::class,'prospectos'])->name('supervisor.prospectos');
    Route::get('plantillaregional',[SupervisorController::class,'plantillaregional'])->name('supervisor.plantillaregional');
    Route::get('cubredescanzo',[SupervisorController::class,'cubredescanzo'])->name('supervisor.cubredescanzo');
    Route::get('asistencia',[SupervisorController::class,'asistencia'])->name('supervisor.asistencia');
    Route::get('reportes',[SupervisorController::class,'reportes'])->name('supervisor.reportes');
    Route::get('centrottrabajo',[SupervisorController::class,'centrottrabajo'])->name('supervisor.centrottrabajo');
    Route::get('cotizacion',[SupervisorController::class,'cotizacion'])->name('supervisor.cotizacion');
    Route::get('sanitizacion',[SupervisorController::class,'sanitizacion'])->name('supervisor.sanitizacion');
    Route::get('proveedores',[SupervisorController::class,'proveedores'])->name('supervisor.proveedores');
    Route::get('incidencias', IncidenciaController::class)->name('supervisor.incidencias');
    Route::get('descargables',[SupervisorController::class,'descargables'])->name('supervisor.descargables');
    Route::get('tickets',[SupervisorController::class,'tickets'])->name('supervisor.tickets');
    Route::get('acta',[SupervisorController::class,'acta'])->name('supervisor.acta');
    Route::get('vacantes',[SupervisorController::class,'vacantes'])->name('supervisor.vacantes');
    Route::get('sidebar',[SupervisorController::class,'sidebar'])->name('supervisor.sidebar');
    
});

// Rutas de acceso Recursos Humanos
Route::group(['prefix'=>'rh', 'middleware'=>['isRH','auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[RHController::class,'index'])->name('rh.dashboard');
    Route::get('profile',[RHController::class,'profile'])->name('rh.profile');
    Route::get('settings',[RHController::class,'settings'])->name('rh.settings');
});

// Rutas de acceso Reclutador
Route::group(['prefix'=>'reclutador', 'middleware'=>['isReclutador','auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[ReclutadorController::class,'index'])->name('reclutador.dashboard');
    Route::get('profile',[ReclutadorController::class,'profile'])->name('reclutador.profile');
    Route::get('settings',[ReclutadorController::class,'settings'])->name('reclutador.settings');
});

// Rutas de acceso Mesa de Control
Route::group(['prefix'=>'mesacontrol', 'middleware'=>['isMesaControl','auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[MesaControlController::class,'index'])->name('mesacontrol.dashboard');
    Route::get('profile',[MesaControlController::class,'profile'])->name('mesacontrol.profile');
    Route::get('settings',[MesaControlController::class,'settings'])->name('mesacontrol.settings');
});

// Rutas de acceso Marketing
Route::group(['prefix'=>'marketing', 'middleware'=>['isMarketing','auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[MarketingController::class,'index'])->name('marketing.dashboard');
    Route::get('profile',[MarketingController::class,'profile'])->name('marketing.profile');
    Route::get('settings',[MarketingController::class,'settings'])->name('marketing.settings');
});

// Rutas de acceso Contador
Route::group(['prefix'=>'contador', 'middleware'=>['isContador','auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[ContadorController::class,'index'])->name('contador.dashboard');
    Route::get('profile',[ContadorController::class,'profile'])->name('contador.profile');
    Route::get('settings',[ContadorController::class,'settings'])->name('contador.settings');
});

// Rutas de acceso Coordinador
Route::group(['prefix'=>'coordinador', 'middleware'=>['isCoordinador','auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[CoordinadorController::class,'index'])->name('coordinador.dashboard');
    Route::get('profile',[CoordinadorController::class,'profile'])->name('coordinador.profile');
    Route::get('settings',[CoordinadorController::class,'settings'])->name('coordinador.settings');
});


// ---------------------------------------------------- FIN RUTAS PARA LOGIN USUARIOS ---------------------------------------------------
// ------------------------------------------------------------- No borrar --------------------------------------------------------------

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Este codigo es del Login Controller para el Auth
// Route::get('login', [LoginController::class, 'showLogin'])->name('login');
// Route::post('submit-login', [LoginController::class, 'postLogin'])->name('login.post'); 
// Route::get('registration', [LoginController::class, 'showRegister'])->name('register');
// Route::post('submit-registration', [LoginController::class, 'postRegistration'])->name('register.post'); 
// Route::get('home', [LoginController::class, 'dashboard']); 
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');