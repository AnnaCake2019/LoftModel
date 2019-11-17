<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('main_photo');
//            $table->string('one_photo');
//            $table->string('two_photo');
//            $table->string('three_photo');
//            $table->string('four_photo');
//            $table->string('five_photo');
//            $table->string('six_photo');
            $table->text('name');
            $table->integer('age');
            $table->integer('height');
            $table->integer('weight');
            $table->text('parameters');
            $table->integer('chest');
            $table->text('country');
            $table->text('city');
            $table->text('followers');
            $table->longText('achievements');
            $table->text('from_who');
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
        Schema::dropIfExists('models');
    }
}
