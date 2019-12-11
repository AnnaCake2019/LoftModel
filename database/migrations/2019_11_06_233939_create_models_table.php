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
            $table->string('one_photo')->nullable();
            $table->string('two_photo')->nullable();
            $table->string('three_photo')->nullable();
            $table->string('four_photo')->nullable();
            $table->string('five_photo')->nullable();
            $table->string('six_photo')->nullable();
            $table->text('name');
            $table->integer('age');
            $table->integer('height');
            $table->integer('weight');
            $table->text('parameters');
            $table->integer('chest');
            $table->text('country');
            $table->text('en_country');
            $table->text('city');
            $table->text('en_city');
            $table->text('followers');
            $table->longText('achievements');
            $table->longText('en_achievements');
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
