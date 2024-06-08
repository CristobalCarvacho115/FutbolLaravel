<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;           //IMPORTAR SOFTDELETES PARA LA OPCIÓN DE ELIMINAR DE FORMA LÓGICA

class Estadio extends Model
{
    use HasFactory,SoftDeletes;                         //SE AÑADE EL SOFTDELETES A USE PARA USARLO
    protected $table = 'estadios';                      //SE CREA LA TABLA estadios (minuscula, plural)

    public function partidos(){                         //CONECTAR TABLAS, se le pone el nombre de la tabla y el modelo
        return $this->hasMany('App\Models\Partido');    //retornamos esta tabla, este objeto tiene uno o más objetos
    }
}
