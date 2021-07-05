<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('product_id');

            $table->unsignedInteger('stall_id')->index();
            $table->foreign('stall_id')->references('stall_id')
                  ->on('stalls')
                  ->onDelete('cascade');


            $table->text('product_name');
            $table->text('product_image');
            $table->text('product_description');
            $table->decimal('product_price', 8, 2);
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
