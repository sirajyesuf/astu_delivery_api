<?php

namespace App\Repository\Bot;
use App\Repository\Bot\OrderInterface;
Use App\Models\User;
use App\Models\Order;
use App\Models\Hotel;

class OrderRepository  implements OrderInterface{


    public function store($data){

        $telegram_user_id =$data['order']['telegram_user_id'];
        $hotel_id = $data['order']['hotel_id'];
        $foods = $data['order']['foods'];
        $qty = $data['order']['qty'];
        $total_price = $data['order']['total_price'];
        $user = User::where('telegram_user_id',$telegram_user_id)->first();
        $hotel = Hotel::find($hotel_id)->first();


        $order = $user->orders()->create([
            'hotel_id' =>$hotel_id,
            'total_price' =>$total_price,
            'status' =>0,
            'payment_status' =>0,
        ]);

        for($i=0;$i<count($foods);$i++){
            $order->foodmenus()->attach([

                $foods[$i] =>['qty' =>$qty[$i]]

            ]);
        }


        return 1;

            
        
      



    }
}

