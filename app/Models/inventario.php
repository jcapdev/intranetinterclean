<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contract\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class inventario extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'inventario_interceln';
    public $timestamps = false;

    protected $fillable = [
        'descripcion',
        'fecha',
        'imagen',
        'status',
        'Sucursal'
        
    ];
    
    protected $hidden = [
        'id_invinter'

    ];





}
