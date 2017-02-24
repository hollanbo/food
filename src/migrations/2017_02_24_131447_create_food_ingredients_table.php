<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hollanbo_food_food_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('food_id')->unsigned();
            $table->integer('ingredient_id')->unsigned();

            $table->foreign('food_id')
                ->references('id')->on('hollanbo_food_food')
                ->onDelete('cascade');
            $table->foreign('ingredient_id')
                ->references('id')->on('hollanbo_food_ingredients')
                ->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hollanbo_food_food_ingredients');
    }
}
