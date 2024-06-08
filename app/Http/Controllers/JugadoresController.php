<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;                                                 //IMPORTAR LOS MODELOS DE LOS OBJETOS USADOS
use App\Models\Equipo;                                                  //IMPORTAR LOS MODELOS DE LOS OBJETOS USADOS

class JugadoresController extends Controller
{
    public function index(){                                            //Retorna la página web y llama a los objetos
        $jugadores = Jugador::all();                                    //Objeto
        $equipos = Equipo::all();                                       //Objeto
        return view('jugadores.index',compact('jugadores','equipos'));  //Retorna la página y en compact se pone los objetos en minuscula y plural
    }

    public function store(Request $request){                            //Obtiene los request (MAYUSCULA $minuscula)(Input) según el name para crear un objeto
        $jugador = new Jugador();                                       //Crea un nuevo objeto (minuscula, singular)
        $jugador->apellido = $request->apellido;                        //Objeto jugador recibiendo datos
        $jugador->nombre = $request->nombre;
        $jugador->posicion = $request->posicion;
        $jugador->numero = $request->numero;
        $jugador->equipo_id = $request->equipo;
        $jugador->save();                                               //Guarda el objeto
        return redirect()->route('jugadores.index');                    //SIEMPRE RETORNAR
    }
}
