<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    protected $table = "historia";
    protected $primaryKey = 'id_historia';
    public $timestamps = false;
    protected $fillable = ['id_historia', 'texto_historia', 'imagen_historia'];
}
