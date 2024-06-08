<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//php artisan create:migration create_variable(NOMBRE DE LA TABLA)_table
//LAS ADD LA USAREMOS PARA ELIMINAR, SOLO CAMBIA EL NOMBRE DE LA TABLA ('partidos')
//Esto se encuentra en laravel escribiendo softdeletes
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {                  //AQUÍ
        Schema::table('partidos', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {                //AQUÍ
        Schema::table('partidos', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
