<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    protected $fillable = [ 'titulo','descripcion','genero','precio' ];
}
