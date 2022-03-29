<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heavy_vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('survey_id');
            $table->foreign('survey_id')->references('id')->on('surveys');
            $table->date('date');
            $table->time('time');
            $table->integer('movement_1_total');
            $table->integer('movement_2_total');
            $table->integer('movement_3_total');
            $table->integer('movement_4_total');
            $table->integer('movement_5_total');
            $table->integer('movement_6_total');
            $table->integer('movement_7_total');
            $table->integer('movement_8_total');
            $table->integer('movement_9_total');
            $table->integer('movement_10_total');
            $table->integer('movement_11_total');
            $table->integer('movement_12_total');
            $table->integer('approach_1_in');
            $table->integer('approach_1_out');
            $table->integer('approach_2_in');
            $table->integer('approach_2_out');
            $table->integer('approach_3_in');
            $table->integer('approach_3_out');
            $table->integer('approach_4_in');
            $table->integer('approach_4_out');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heavy_vehicles');
    }
};
