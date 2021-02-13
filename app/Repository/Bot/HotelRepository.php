<?php
namespace App\Repository\Bot;
use App\Repository\Bot\HotelInterface;
use App\Models\Hotel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
class HotelRepository implements HotelInterface{

    public function all(){

        return Hotel::paginate(1);
    }
    public function find($id){
        
        return Hotel::find($id);

    }
    public function foodmenus($id,$exclude=[]){

        return DB::table('food_menus')->join('foodmenu_hotel','food_menus.id','=','foodmenu_hotel.foodmenu_id')->where('foodmenu_hotel.hotel_id',$id)->whereNotIn('foodmenu_hotel.foodmenu_id',$exclude)->paginate(1);
    }

    
}