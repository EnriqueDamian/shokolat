<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    protected $table = "marcas";
    protected $primaryKey = 'id_marca';
    public $timestamps = false;
    protected $fillable = ['id_marca', 'nombre_marca', 'marca_img_banner', 'marca_img_logo'];
}
