<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLrvdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lrvd', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('IDCL');
            $table->float('amount',8,2);
            $table->date('date');
            $table->date('endDate');
            $table->string('tipeTicket');
            $table->string('comment');
            $table->string('typeDocument'); 
            $table->string('documentId'); 
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lrvd');
    }
}
