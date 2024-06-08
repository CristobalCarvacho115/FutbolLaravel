<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;                      //IMPORT PARA FECHA Y HORA REAL

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //en laravel seeding aparece el copy, cambian este dato
                    //ESTE
        DB::table('equipos')->insert([
            //AÑADIR LA WEA SEGÚN LO QUE PIDAN (sql practicamente xd)
            //['variable=>Dato', 'variable=>Dato', 'variable'=>'Carbon::now()'],
                //eso último es la fecha y hora de cuando se creó, deben usar el import Carbon\Carbon
            ['nombre'=>'Colo Colo',           'entrenador'=>'Jorge Almiron',      'created_at'=>Carbon::now()],
            ['nombre'=>'Universidad Catolica','entrenador'=>'Tiago Nunes',        'created_at'=>Carbon::now()],
            ['nombre'=>'Everton',             'entrenador'=>'Francisco Meneghini','created_at'=>Carbon::now()],

        ]);
    }
}
