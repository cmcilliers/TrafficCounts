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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('intersection_id');
            $table->foreign('intersection_id')->references('intersection_id')->on('information');
            $table->string('file_name');
            $table->date('survey_date');
            $table->time('am_survey_start');
            $table->time('am_survey_end');
            $table->time('pm_survey_start');
            $table->time('pm_survey_end');
            $table->time('midday_survey_start');
            $table->time('midday_survey_end');
            $table->time('am_survey_start');
            $table->time('am_ph_start');
            $table->time('pm_ph_start');
            $table->time('midday_ph_start');
            $table->float('phf_am');
            $table->float('phf_pm');
            $table->float('phf_midday');
            $table->timestamps();
        });
    }

    /**
      PHF_AM, PHF_PM, PHF_Mid, Duration
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
};
