<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodmenuOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodmenu_order', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('order_id');
            $table->unsignedbiginteger('foodmenu_id');
            $table->integer('qty');
            $table->foreign('order_id')->references('id')->on('orders');
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
        Schema::dropIfExists('foodmenu_order');
    }
}
