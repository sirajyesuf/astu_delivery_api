<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function foodmenus(){

        return $this->belongsToMany(FoodMenu::class,'foodmenu_order','order_id','foodmenu_id');

    }

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function hotel(){
        
        return $this->belongsTo(Hotel::class);

    }
}
