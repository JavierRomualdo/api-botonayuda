<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportemensajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportemensaje', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuarioentidad_id')->unsigned();
            $table->string('enlacemapa', 250);
            $table->date('fechareporte');
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
     Schema::dropIfExists('reportemensaje');   //
    }
}
