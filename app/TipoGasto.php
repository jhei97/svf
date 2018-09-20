<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoGasto extends Model
{
    protected $table = 'tipo_gasto';
    protected $primaryKey = 'idtipo_gasto';
    protected $fillable = ['idtipo_gasto' , 'nombre'];
    public $timestamps = false;
}
