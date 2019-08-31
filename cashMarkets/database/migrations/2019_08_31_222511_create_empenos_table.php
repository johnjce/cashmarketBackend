<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empenos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('IDCL');
            $table->float('precio',8,2);
            $table->float('cantidadreserva',8,2);
            $table->date('fecha');
            $table->string('comentario');
            $table->date('fechalimite');
            $table->string('tipo');
            $table->timestamp('added_on');
            $table->timestamp('modify_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empenos');
    }
}
