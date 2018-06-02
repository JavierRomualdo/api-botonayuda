<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni', 8);
            $table->string('nombres', 50);
            $table->string('apellidopaterno', 30);
            $table->string('apellidomaterno', 30);
            $table->string('direccion', 100);
            $table->date('fechanacimiento');
            $table->char('sexo', 1);
            $table->string('clave', 10);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
