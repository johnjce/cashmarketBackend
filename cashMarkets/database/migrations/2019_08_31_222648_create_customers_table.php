<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('IDCL');
            $table->timestamp('registerDate');
            $table->string('dni');
            $table->string('names');
            $table->string('lastname');
            $table->integer('telephone');
            $table->string('email');
            $table->binary('img_dni')->nullable(); 
            $table->string('address'); 
            $table->binary('signaturePicture')->nullable(); 
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
        Schema::dropIfExists('customers');
    }
}
