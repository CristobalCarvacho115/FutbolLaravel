<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//php artisan create:migration create_variable(NOMBRE DE LA TABLA)_table
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();                 //table->valor_asignado('variable')     ->autoIncrement(Opcional, esto lo vuelve la primary key)
            $table->string('apellido',20);                                  //table->valor_asignado('variable', maximo del string(OPCIONAL))
            $table->string('nombre',20);
            $table->string('posicion',20);
            $table->integer('numero');
            $table->timestamps();
            $table->unsignedInteger('equipo_id');
            $table->foreign('equipo_id')->references('id')->on('equipos');
            //SE LE AÑADE LA CLAVE FORANEA, DEBE ESTAR CONECTADA LA TABLA EN MODELO
            //EL DATO equipo_id de esta tabla, hace referencia al id de la tabla equipos
            //LA MIGRACIÓN CON CLAVES FORANEAS DEBEN CREARSE DESPUÉS QUE LA TABLA A LA CUAL HACE REFERENCIA
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadores');                                  //tabla que se usa
    }
};
