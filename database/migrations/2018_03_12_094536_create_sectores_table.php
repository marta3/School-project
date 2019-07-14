<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectores', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('nombre',50);
            $table->timestamps();
        });

        DB::table('sectores')->insert([
            'nombre'=> 'Informatica'
            ]
        );

        DB::table('sectores')->insert([
            'nombre'=> 'Comercial'
            ]
        );
        DB::table('sectores')->insert([
            'nombre'=> 'RRHH'
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
        Schema::dropIfExists('sectores');
    }
}
