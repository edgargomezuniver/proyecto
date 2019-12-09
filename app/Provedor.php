<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    protected $fillable = [ 'nombre','telefono','direccion','email' ];
}
