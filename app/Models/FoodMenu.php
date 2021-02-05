<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodMenu extends Model
{
    use HasFactory;

    public function hotels(){
        
        return $this->belongsToMany(Hotel::class,'foodmenu_hotel');
    }
}
