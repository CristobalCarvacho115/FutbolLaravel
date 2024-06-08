<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $table = 'jugadores';                     //SE CREA LA TABLA jugadores (minuscula, plural)

    public function equipo(){                           //CONECTAR TABLAS, se le pone el nombre de la tabla y el modelo
        return $this->belongsTo('App\Models\Equipo');   //retornamos la tabla, este objeto forma parte de un solo objeto
    }
}
