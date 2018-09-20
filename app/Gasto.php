<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $table = 'gasto';
	protected $primaryKey = 'idgasto';
    protected $fillable = ['idgasto', 'monto', 'fecha_gasto', 'idtipo_gasto',];
    public $timestamps = false;
}
