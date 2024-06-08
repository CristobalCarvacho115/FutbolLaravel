<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;                     //IMPORTAR LOS MODELOS DE LOS OBJETOS USADOS
use App\Models\Estadio;                     //IMPORTAR LOS MODELOS DE LOS OBJETOS USADOS
use App\Models\Fecha;                       //IMPORTAR LOS MODELOS DE LOS OBJETOS USADOS


class PartidosController extends Controller
{
    public function index(){                                                    //Llama a los objetos y retorna la página web
        $partidos = Partido::all();                                             //Objeto
        $estadios = Estadio::all();                                             //Objeto
        $fechas = Fecha::all();                                                 //Objeto
        return view('partidos.index',compact('partidos','estadios','fechas'));  //Retorna la página y en compact se pone los objetos en minuscula y plural
    }

    public function store(Request $request){                                    //Obtiene los request (MAYUSCULA $minuscula)(Input) según el name para crear un objeto
        $partido = new Partido();                                               //Crea un nuevo objeto (minuscula, singular)
        $fecha = new Fecha();                                                   //Crea un nuevo objeto (minuscula, singular)

        $fecha->numero  = $request->numero;                                     //Objeto fecha recibiendo datos
        $fecha->inicio  = $request->fecha;
        $fecha->termino = $request->termino;
        $fecha->save();                                                         //Guarda el objeto

        $partido->estadio_id = $request->estadio_id;                            //Objeto partido recibiendo datos
        $partido->fecha_id   = $fecha->id;
        $partido->fecha      = $request->fecha;
        $partido->estado     = $request->estado;
        $partido->save();                                                       //Guarda el objeto

        return redirect()->route('partidos.index');                             //REDIRECCIONAR LA PÁGINA SIEMPRE
    }
    //SE REQUIERE UNA MIGRACION PARA HACER SOFTDELETE Y EN EL MODELO
    public function destroy(Partido $partido){                                  //Elimina de forma lógica un objeto, los parametros son el objeto (MAYUSCULA $minuscula)
        $partido->delete();                                                     //Se elimina el objeto
        return redirect()->route('partidos.index');                             //SIEMPRE RETORNAR
    }
}
