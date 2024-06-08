<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){                //Retorna la página web
        return view('home.index');          //Carpeta.Pagina
    }

    public function login(){                //Carpeta.Pagina
        return view('home.login');          //Carpeta.Pagina
    }
}
