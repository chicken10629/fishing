<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prefecture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('prefecture', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('region_id')->unsigned();
            /*8地方に分けるために必要*/
            $table->integer('code');
            /*47都道府県の番号*/
            $table->string('name');
            $table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('prefecture');
    }
}
