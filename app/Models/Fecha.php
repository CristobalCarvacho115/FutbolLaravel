<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    use HasFactory;
    protected $table = 'fechas';                        //SE CREA LA TABLA fechas (minuscula, plural)

    public function partidos(){                         //CONECTAR TABLAS, se le pone el nombre de la tabla y el modelo
        return $this->hasMany('App\Models\Partido');    //retornamos esta tabla, este objeto tiene uno o más objetos
    }
}
