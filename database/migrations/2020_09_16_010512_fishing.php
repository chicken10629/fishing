<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fishing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                   Schema::create('fishing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('date');
            $table->integer('start_time');
            $table->integer('finish_time');
            $table->integer('map_id');
            $table->integer('place_id');
            $table->string('weather');
            $table->string('tide');
            $table->integer('sea_temperature');
            $table->integer('depth');
            $table->integer('tana');
            $table->string('rod');
            $table->string('reel');
            $table->string('line');
            $table->string('bait');
            $table->string('comment');
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
        Schema::dropIfExists('fishing');
    }
}
