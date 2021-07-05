<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_orders', function (Blueprint $table) {
            $table->increments('product_order_id');

            $table->unsignedInteger('product_id')->index();
            $table->foreign('product_id')->references('product_id')
                  ->on('products')
                  ->onDelete('cascade');

            $table->unsignedInteger('order_id')->index();
            $table->foreign('order_id')->references('order_id')
                  ->on('orders')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('product_orders');
    }
}
