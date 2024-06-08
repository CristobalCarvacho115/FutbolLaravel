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
        Schema::create('fechas', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->integer('numero');
            $table->date('inicio');
            $table->date('termino');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        {
            Schema::dropIfExists('fechas');                     //tabla que se usa
        }
    }
};
