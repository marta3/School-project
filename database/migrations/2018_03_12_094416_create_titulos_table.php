<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulos', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('nombre',50);
            $table->timestamps();
        });


        DB::table('titulos')->insert([
            'nombre'=> 'Administración y Gestión'
            ]
        );

        DB::table('titulos')->insert([
            'nombre'=> 'Artes Gráficas'
            ]
        );
        DB::table('titulos')->insert([
            'nombre'=> 'Marketing'
            ]
        );   
        DB::table('titulos')->insert([
            'nombre'=> 'Sanidad'
            ]
        ); 

        DB::table('titulos')->insert([
            'nombre'=> 'Hostelería'
            ]
        ); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titulos');
    }
}
