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
            $table->increments('id');
            $table->string('sku')->nullable(); //+
            $table->string('enabled'); //+
            $table->integer('sorting')->nullable();
            $table->integer('price')->default(0);
            $table->integer('amount')->default(0);
            $table->string('unit')->nullable();
            $table->string('discount')->nullable();
            $table->string('shippingprice')->nullable();
            $table->integer('preorder')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
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
