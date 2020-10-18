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
            $table->integer('start_time')->nullable();
            $table->integer('finish_time')->nullable();
            $table->integer('map_id');
            $table->integer('place_id');
            $table->string('weather')->nullable();
            $table->string('tide')->nullable();
            $table->integer('sea_temperature')->nullable();
            $table->integer('depth')->nullable();
            $table->integer('tana')->nullable();
            $table->string('rod')->nullable();
            $table->string('reel')->nullable();
            $table->string('line')->nullable();
            $table->string('bait')->nullable();
            $table->string('comment')->nullable();
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
