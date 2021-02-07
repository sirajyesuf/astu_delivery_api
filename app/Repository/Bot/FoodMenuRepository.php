<?php
namespace App\Repository\Bot;
use App\Repository\Bot\FoodMenuInterface;
use App\Models\FoodMenu;

class FoodMenuRepository implements FoodMenuInterface{

    public function all(){

        return FoodMenu::paginate(1);
    }
    public function hotels($id){

        return $this->find($id)->hotels()->paginate(1);

    }

    public function find($id){
        return FoodMenu::find($id);
    }



}