<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mappoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                                Schema::create('mappoint', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('map_id');
            $table->integer('point_x');
            $table->integer('point_y');
            $table->integer('mapchip_id');
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
        //
    }
}
