<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    protected $table = "contactos";
    protected $primaryKey = 'id_contacto';
    public $timestamps = false;
    protected $fillable = ['id_contacto', 'nombres_contacto', 'apellidos_contacto', 'telefono_contacto', 'correo_contacto', 'mensaje_contacto'];
}
