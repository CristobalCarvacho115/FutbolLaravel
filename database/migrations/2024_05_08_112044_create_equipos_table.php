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
        Schema::create('equipos', function (Blueprint $table) { //tabla (minuscula, plural)
            $table->unsignedInteger('id')->autoIncrement();     //table->valor_asignado('variable')     ->autoIncrement(Opcional, esto lo vuelve la primary key)
            $table->string('nombre',30);                        //table->valor_asignado('variable',maximo del string(OPCIONAL))
            $table->string('entrenador',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');                        //tabla que se usa
    }
};
