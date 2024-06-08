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
        Schema::create('partidos', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->UnsignedInteger('estadio_id');
            $table->foreign('estadio_id')->references('id')->on('estadios');//*********
            $table->unsignedInteger('fecha_id');
            $table->foreign('fecha_id')->references('id')->on('fechas'); //**********
            $table->datetime('fecha');
            $table->tinyInteger('estado');
            $table->timestamps();
            //*************
            //SE LE AÑADE LA CLAVE FORANEA, DEBE ESTAR CONECTADA LA TABLA EN MODELO
            //EL DATO estadio_id de esta tabla, hace referencia al id de la tabla estadios
            //EL DATO fecha_id de esta tabla, hace referencia al id de la tabla fechas
            //LA MIGRACIÓN CON CLAVES FORANEAS DEBEN CREARSE DESPUÉS QUE LA TABLA A LA CUAL HACE REFERENCIA
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        {
            Schema::dropIfExists('partidos');
        }
    }
};
