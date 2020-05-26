<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Meal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_info',function(Blueprint $table)
        {
            $table->bigincrements('meal_id');
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('meal_category');
            $table->string('meal_name');
            $table->date('meal_limitday');
            $table->biginteger('meal_num');
            $table->biginteger('meal_price');
            $table->string('meal_image');
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
        Schema::dropIfExists('meal_info');
    }
}
