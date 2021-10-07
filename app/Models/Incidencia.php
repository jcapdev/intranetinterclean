<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contract\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Incidencia extends Model
{
    // use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'incidencias';
    public $timestamps = false;

    protected $fillable = [
       'fechaIncidencia',
       'idSucursal' ,
       'nombreProsInc',
       'descripcion',
       'estatusIncidencia',
       'urlDocumentoInc',
       'NomDocInc',
       'idUsarioRegInc', 
       'prioridad' 
    ];
}
