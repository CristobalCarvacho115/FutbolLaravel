<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;           //IMPORTAR EL SOFTDELETES SI QUIERES LA OPCION DE ELIMINAR DE FORMA LÓGICA

class Partido extends Model
{
    use HasFactory,SoftDeletes;                         //SE AÑADE EL SOFTDELETES A USE PARA USARLO
    protected $table = 'partidos';                      //SE CREA LA TABLA partidos (minuscula, plural)

    public function estadio(){                          //CONECTAR TABLAS, se le pone el nombre de la tabla y el modelo
        return $this->belongsTo('App\Models\Estadio');  //retornamos la tabla, este objeto forma parte de un solo objeto
    }
    public function fecha(){                            //CONECTAR TABLAS, se le pone el nombre de la tabla y el modelo
        return $this->belongsTo('App\Models\Fecha');    //retornamos la tabla, este objeto forma parte de un solo objeto
    }
}
