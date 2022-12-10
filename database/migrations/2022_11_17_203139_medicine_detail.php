<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MedicineDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_details', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('description');
            $table->string('expiration_date');
            $table->timestamps();

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
