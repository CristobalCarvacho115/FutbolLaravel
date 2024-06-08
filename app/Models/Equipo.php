<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;           //IMPORTAR EL SOFTDELETES SI QUIERES LA OPCION DE ELIMINAR DE FORMA LÓGICA

class Equipo extends Model
{
    use HasFactory,SoftDeletes;                         //SE AÑADE AL USE SOFTDELETES PARA USARLO
    protected $table = 'equipos';                       //SE CREA LA TABLA equipos (minuscula, plural)

    public function jugadores(){                        //CONECTAR TABLAS, se le pone el nombre de la tabla y el modelo
        return $this->hasMany('App\Models\Jugador');    //retornamos esta tabla, este objeto tiene uno o más objetos
    }
}
