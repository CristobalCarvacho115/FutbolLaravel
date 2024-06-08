<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;                                  //IMPORTAR LOS MODELOS DE LOS OBJETOS USADOS

class EquiposController extends Controller
{
    public function index(){                            //Retorna la página web y llama a los objetos
        $equipos = Equipo::all();                       //Objeto
        return view('equipos.index',compact('equipos'));//Retorna la página y en compact se pone los objetos en minuscula y plural
    }

    public function store(Request $request){            //Obtiene los request (MAYUSCULA $minuscula)(Input) según el name para crear un objeto
        $equipo = new Equipo();                         //Crea un nuevo objeto (minuscula, singular)
        $equipo->nombre = $request->nombre;             //Objeto equipo recibiendo datos
        $equipo->entrenador = $request->entrenador;
        $equipo->save();                                //Se guarda el nuevo objeto
        return redirect()->route('equipos.index');      //SIEMPRE RETORNAR
    }
    //SE REQUIERE UNA MIGRACION PARA HACER SOFTDELETE Y EN EL MODELO
    public function destroy(Equipo $equipo){            //Elimina de forma lógica un objeto, los parametros son el objeto (MAYUSCULA $minuscula)
        $equipo->delete();                              //Se elimina el objeto
        return redirect()->route('equipos.index');      //SIEMPRE RETORNAR
    }
}
