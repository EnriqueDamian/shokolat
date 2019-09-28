<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    protected $table = "vision";
    protected $primaryKey = 'id_vision';
    public $timestamps = false;
    protected $fillable = ['id_vision', 'vision', 'imagen_vision'];
}
