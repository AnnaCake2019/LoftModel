<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVipModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vip_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->integer('age');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('parameters');
            $table->integer('chest');
            $table->text('city');
            $table->text('country');
            $table->text('followers');
            $table->longText('achievements');
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
        Schema::dropIfExists('vip_models');
    }
}
