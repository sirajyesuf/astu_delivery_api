<?php
namespace App\Repository\Bot;
use App\Repository\Bot\FoodMenuInterface;
use App\Models\FoodMenu;

class FoodMenuRepository implements FoodMenuInterface{

    public function all(){

        return FoodMenu::paginate(1);
    }


}