<?php
namespace App\Repository\Bot;
use App\Repository\Bot\HotelInterface;
use App\Models\Hotel;

class HotelRepository implements HotelInterface{

    public function all(){

        return Hotel::paginate(1);
    }
    public function find($id){
        
        return Hotel::find($id);

    }
    public function foodmenus($id){
        
        return $this->find($id)->foodmenus()->where('hotel_id',$id)->paginate(1);


    }


    
}