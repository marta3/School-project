<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('empresa');
            $table->string('sector');
            $table->date('fecha_limite');
            $table->timestamps();
        });

        DB::table('ofertas')->insert([
            'titulo'=> 'Javascript + Vue.js Developer',
            'descripcion'=>'&#9679; Evaluación wireframes y maquetas para la viabilidad técnica, la coherencia y la conveniencia del usuario',
            'empresa'=>'Opinov8',
            'sector'=>'Informatica',
            'fecha_limite'=>'2018-06-30'
            ]
        );

        DB::table('ofertas')->insert([
            'titulo'=>'Ingeniero de Sistemas',
            'descripcion'=>'- Realizar despliegue de proyectos en el área de sistemas de VMware, Citrix y entornos DELL EMC.',
            'empresa'=>'base10',
            'sector'=>'Informatica',
            'fecha_limite'=>'2018-06-06'
            ]);

        DB::table('ofertas')->insert([
            'titulo'=>'Gestor comercial',
            'descripcion'=>'Gestión de la cartera de clientes asignada.Visitas y seguimiento de clientes para su fidelización.',
            'empresa'=>'Blue Planet',
            'sector'=>'Comercial',
            'fecha_limite'=>'2018-06-30'
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}
