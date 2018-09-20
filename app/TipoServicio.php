<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
    protected $table = 'tipo_servicio';
    protected $primaryKey = 'idtipo_servicio';
    protected $fillable = ['idtipo_servicio' , 'nombre' ];
    public $timestamps = false;
}
