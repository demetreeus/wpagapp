<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('preferred_hand')->nullable();
            $table->string('position')->nullable();
            $table->string('status')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('physical_acceleration')->nullable();
            $table->integer('physical_pace')->nullable();
            $table->integer('physical_power')->nullable();
            $table->integer('physical_leg_power')->nullable();
            $table->integer('physical_shooting_power')->nullable();
            $table->integer('physical_flexibility')->nullable();
            $table->integer('technical_ball_handling')->nullable();
            $table->integer('technical_ball_reception')->nullable();
            $table->integer('technical_passing_accuracy')->nullable();
            $table->integer('technical_shooting_accuracy')->nullable();
            $table->integer('technical_blocking')->nullable();
            $table->integer('technical_swimming_technique')->nullable();
            $table->integer('tamperament_anticipation')->nullable();
            $table->integer('tamperament_concentration')->nullable();
            $table->integer('tamperament_flair')->nullable();
            $table->integer('tamperament_bravery')->nullable();
            $table->integer('tamperament_leadership')->nullable();
            $table->integer('tamperament_consistency')->nullable();
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
        Schema::drop('players');
    }
}
