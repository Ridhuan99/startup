<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');

            $table->unsignedInteger('buyer_id')->index();
            $table->foreign('buyer_id')->references('user_id')
                  ->on('users')
                  ->onDelete('cascade');


            $table->text('status');
            $table->integer('quantity');
            $table->date('delivered_time');
            $table->text('description');
            $table->boolean('confirmed');
            $table->decimal('total_price', 8, 2);
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
        Schema::dropIfExists('orders');
    }
}
