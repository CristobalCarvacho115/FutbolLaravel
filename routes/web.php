<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\PartidosController;
use App\Http\Controllers\EstadiosController;
// IMPORTAR TODOS LOS CONTROLADORES QUE HAYAN

// get es para mostrar pagina
// post para el store que es obtener datos
// delete para el destroy que es para borrar objetos
// Se le añade el controllador correspondiente con su funcion
// el name si es get ponen carpeta.pagina
// el name si es post ponen carpeta.store
// el name si es delete ponen carpeta.destroy Y MUY IMPORTANTE
// EN EL LINK /equipos/{equipo} en corchetes añaden eso en singular que es para hacerlo con el objeto que se eligió

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/login',[HomeController::class,'login'])->name('home.login');

Route::get('/equipos',[EquiposController::class,'index'])->name('equipos.index');
Route::post('/equipos',[EquiposController::class,'store'])->name('equipos.store');
Route::delete('/equipos/{equipo}',[EquiposController::class,'destroy'])->name('equipos.destroy');

Route::get('/jugadores',[JugadoresController::class,'index'])->name('jugadores.index');
Route::post('/jugadores',[JugadoresController::class,'store'])->name('jugadores.store');

Route::get('/estadios',[EstadiosController::class,'index'])->name('estadios.index');
Route::post('/estadios',[EstadiosController::class,'store'])->name('estadios.store');
Route::delete('/estadios/{estadio}',[EstadiosController::class,'destroy'])->name('estadios.destroy');

Route::get('/partidos',[PartidosController::class,'index'])->name('partidos.index');
Route::post('/partidos',[PartidosController::class,'store'])->name('partidos.store');
Route::delete('/partidos/{partido}',[PartidosController::class,'destroy'])->name('partidos.destroy');
