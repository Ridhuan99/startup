<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stalls', function (Blueprint $table) {
            $table->increments('stall_id');

            $table->unsignedInteger('seller_id')->index();
            $table->foreign('seller_id')->references('user_id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->text('stall_name');
            $table->text('stall_phone_number');
            $table->text('stall_address');
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
        Schema::dropIfExists('stalls');
    }
}
