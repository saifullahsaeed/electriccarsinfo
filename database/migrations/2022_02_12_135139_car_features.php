<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarFeatures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //many to many relationship between cars and features
        Schema::create('car_features', function (Blueprint $table) {
            $table->id();
            $table->uuid('car_id');
            $table->foreign('car_id')->references('id')->on('cars');
            $table->integer('feature_id')->unsigned();
            $table->foreign('feature_id')->references('id')->on('features');
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