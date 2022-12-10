<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sex');
            $table->integer('age');
            $table->string('color');
            $table->double('weight');
            $table->string('breed');
            $table->timestamps();

            $table->bigInteger('id_pet_owner')->unsigned();
            $table->foreign('id_pet_owner')->references('id')
                                    ->on('pet_owners');
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
