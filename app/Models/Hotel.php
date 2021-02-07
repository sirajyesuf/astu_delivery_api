<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    
    public function foodmenus(){
        
        return $this->belongsToMany(FoodMenu::class,'foodmenu_hotel','foodmenu_id','hotel_id')->withPivot('price');


    }
}
