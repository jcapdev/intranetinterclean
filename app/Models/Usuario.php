<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use Notifiable, HasApiTokens, HasFactory;

    protected $table = 'usuarios';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'nombreUsuario',
        'password',
        'online',
        'tipo_usuario',
        'zona',
        'cliente',
        'Estatus'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
