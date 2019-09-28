<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = "usuarios";
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;
    protected $fillable = ['id_usuario', 'nombre_usuario', 'email_usuario', 'telefono_usuario', 'cargo_usuario', 'password_usuario'];
}
