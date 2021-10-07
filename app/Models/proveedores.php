<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class proveedores extends Model
{
    use Notifiable, HasApiTokens, HasFactory;


    protected $table = 'proveedor';
    public $timestamps = false;

    protected $fillable = [
        'pais_proveedor',
        'Estado_proveedor',
        'nombre_proveedor',
        'rfc_proveedor',
        'tipo_proveedor',
        'direccion_proveedor',
        'cp_proveedor',
        'telefono_proveedor',
        'forma_pago_proveedor',
        'descripcion',
        'productos',
        'tiposrevioprop',
        'municipio',
        'correo',
    ];
    
    protected $hidden = [
        'servicio',
        'tiposrevioprop',
    ];

}
