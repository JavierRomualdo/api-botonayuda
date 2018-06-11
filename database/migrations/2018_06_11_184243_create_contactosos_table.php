<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactososTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('contactosos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuarioentidad_id')->unsigned();
            $table->string('nombre', 100);
            $table->string('numero', 100);
            $table->string('mensaje', 250);
            $table->string('linkubicacion', 100);
            $table->date('fecha');
            $table->boolean('estado')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('usuarioentidad_id')->references('id')->on('usuarioentidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('contactosos');   //
    }
}
