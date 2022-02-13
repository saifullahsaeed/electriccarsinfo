<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Images extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //images table with columns
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->string('name');
            $table->uuid('car_id');
            $table->foreign('car_id')->references('id')->on('cars');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}