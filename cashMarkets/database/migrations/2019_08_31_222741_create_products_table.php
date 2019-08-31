<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tipe');
            $table->string('make');
            $table->string('model');
            $table->string('sn');
            $table->integer('stock');
            $table->string('state');
            $table->integer('idPurchase'); 
            $table->float('pricePurchase',8,2); 
            $table->float('priceSale',8,2); 
            $table->float('priceReservation',8,2); 
            $table->int('productState'); 
            $table->int('currentAgreement'); 
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
        Schema::dropIfExists('products');
    }
}
