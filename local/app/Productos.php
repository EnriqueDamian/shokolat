<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = "productos";
    protected $primaryKey = 'id_producto';
    public $timestamps = false;
    protected $fillable = ['id_producto', 'id_marca', 'nombre_producto', 'descripcion_producto', 'cantidad_producto', 'imagen_producto'];
}
