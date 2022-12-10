<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AttentionService2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attention_services', function (Blueprint $table) {
            $table->id();
            $table->date('date_service');
            $table->string('description');
            $table->timestamps();

            $table->bigInteger('id_attention')->unsigned();
            $table->foreign('id_attention')->references('id')
                ->on('attentions');
            $table->bigInteger('id_service')->unsigned();
            $table->foreign('id_service')->references('id')
                ->on('services');
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
