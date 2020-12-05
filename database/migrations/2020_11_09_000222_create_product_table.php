<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id_product');
            $table->bigInteger('id_category')->unsigned();
            $table->string('name_product',255);
            $table->double('price_product');
            $table->double('promotion_price');
            $table->text('description_product');
            $table->double('quantity_product');
            $table->string('image_product',255);
            $table->foreign('id_category')->references('id_category')->on('categories');
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
        Schema::dropIfExists('product');
    }
}
