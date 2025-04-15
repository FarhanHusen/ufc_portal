<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_assessments', function (Blueprint $table) {
            $table->id();
            $table->string('player_name');
            $table->integer('age');
            $table->string('position');
            $table->float('height'); // in cm
            $table->float('weight'); // in kg
            $table->float('bmi')->nullable(); // Calculated BMI
            $table->string('health_status')->nullable(); // Good, Moderate, Poor
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
        Schema::dropIfExists('health_assessments');
    }
}
