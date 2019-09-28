<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mision extends Model
{
    protected $table = "mision";
    protected $primaryKey = 'id_mision';
    public $timestamps = false;
    protected $fillable = ['id_mision', 'mision', 'imagen_mision'];
}
