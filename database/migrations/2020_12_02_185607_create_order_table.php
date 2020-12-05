<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('order_id');
            $table->bigInteger('user_id')->unsigned();
            $table->integer('shipping_id')->unsigned();
            $table->integer('payment_id')->unsigned();
            $table->float('order_total');
            $table->string('order_status');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('shipping_id')->references('shipping_id')->on('shipping');
            $table->foreign('payment_id')->references('payment_id')->on('payment');
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
        Schema::dropIfExists('order');
    }
}
