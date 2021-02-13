<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodmenuHotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodmenu_hotel', function (Blueprint $table) {

            $table->id();
            $table->unsignedbiginteger('foodmenu_id');
            $table->unsignedbiginteger('hotel_id');
            $table->bigInteger("price");
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->foreign('foodmenu_id')->references('id')->on('food_menus');
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
        Schema::dropIfExists('foodmenu_hotel');
    }
}
