<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estadio;                     //IMPORTAR LOS MODELOS DE LOS OBJETOS USADOS

class EstadiosController extends Controller
{
    public function index(){                                //Retorna la página web y llama a los objetos
        $estadios= Estadio::all();                          //Objeto
        return view('estadios.index',compact('estadios'));  //Retorna la página y en compact se pone los objetos en minuscula y plural
    }

    public function store(Request $request){                //Obtiene los request (MAYUSCULA $minuscula)(Input) según el name para crear un objeto
        $estadio = new Estadio();                           //Crea un nuevo objeto (minuscula, singular)
        $estadio->nombre = $request->nombre;                //Objeto estadio recibiendo datos
        $estadio->save();                                   //Guarda el objeto
        return redirect()->route('estadios.index');         //SIEMPRE RETORNAR
    }
    //SE REQUIERE UNA MIGRACION PARA HACER SOFTDELETE Y EN EL MODELO
    public function destroy(Estadio $estadio){              //Elimina de forma lógica un objeto, los parametros son el objeto (MAYUSCULA $minuscula)
        $estadio->delete();                                 //Se elimina el objeto
        return redirect()->route('estadios.index');         //SIEMPRE RETORNAR
    }
}
