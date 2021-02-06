<?php
namespace App\Repository\Bot;
use App\Repository\Bot\HotelInterface;
use App\Models\Hotel;

class HotelRepository implements HotelInterface{

    public function all(){

        return Hotel::paginate(5);
    }


}