<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PetOwner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('pet_owners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');

            $table->bigInteger('order_id')->unsigned();
            $table->foreign('order_id')->references('id')
                                    ->on('orders');

            $table->bigInteger('cart_id')->unsigned();
            $table->foreign('cart_id')->references('id')
                                    ->on('shopping_carts');

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
