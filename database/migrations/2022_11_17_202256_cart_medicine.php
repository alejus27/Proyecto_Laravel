<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartMedicine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_medicines', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('cart_id')->unsigned();
            $table->foreign('cart_id')->references('id')
                                    ->on('shopping_carts');

            $table->bigInteger('medicine_id')->unsigned();
            $table->foreign('medicine_id')->references('id')
                                    ->on('medicines');

         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
