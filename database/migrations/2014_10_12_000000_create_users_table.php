<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('name', 20);
            $table->string('second_name', 50);
            $table->string('provincia',30);
            $table->string('localidad', 50);
            $table->string('direccion', 100);
            $table->string('telefono', 9);
            $table->date('fecha_nac');
            $table->string('email', 50)->unique();
            $table->string('password',100);
            $table->string('dni', 9);
            $table->tinyInteger('vehiculo')->default(0);
            $table->string('foto',150)->default('foto_default.png');
            $table->tinyInteger('tipo')->default(0);
            $table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name'=> 'Marta',
            'second_name'=> 'Armario',
            'provincia'=> 'Cádiz',
            'localidad'=> 'Jerez',
            'fecha_nac'=>'1997-03-12',
            'direccion'=> 'Calle Kiwi',
            'telefono'=> '608854543',
            'email'=> 'martaab1997@gmail.com',
            'password'=> bcrypt('12121212'),
            'dni' => '32456789N',
            'vehiculo' => 1,
            'tipo'=>1,
            'confirmed' =>1
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
        Schema::dropIfExists('users');
    }
}
